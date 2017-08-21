# -*- coding: utf-8 -*-
# Generated by Django 1.11.2 on 2017-07-05 20:14
from __future__ import unicode_literals

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Cerveceria',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nombre_local', models.CharField(max_length=100, verbose_name='Distribuidor')),
                ('ubicacion', models.CharField(max_length=250, verbose_name='Dirección')),
                ('horario_atencion', models.CharField(blank=True, max_length=250, null=True, verbose_name='Horario de atención')),
            ],
            options={
                'verbose_name': 'Local',
                'verbose_name_plural': 'Locales',
            },
        ),
        migrations.CreateModel(
            name='ProductoArtesanal',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nombre_cerveza', models.CharField(max_length=100, verbose_name='Nombre')),
                ('tipo_fermentacion', models.IntegerField(choices=[(1, 'ALE'), (2, 'LAGER')], verbose_name='Fermentación')),
                ('descripcion', models.TextField(max_length=250, verbose_name='Descripción')),
                ('imagen_artesanal', models.CharField(default='./images/nombre_imagen.ext', max_length=250, verbose_name='Ruta de la imagen')),
                ('posicion_ranking', models.FloatField(blank=True, editable=False, max_length=255, null=True)),
            ],
            options={
                'verbose_name': 'Cerveza',
                'verbose_name_plural': 'Cervezas',
            },
        ),
        migrations.CreateModel(
            name='Valor',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('precio', models.PositiveIntegerField(default=0, verbose_name='Precio en $')),
                ('cerveceria_id', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='artesanal.Cerveceria', verbose_name='Distribuidor')),
            ],
            options={
                'verbose_name': 'Precio',
                'verbose_name_plural': 'Precios',
            },
        ),
        migrations.CreateModel(
            name='Ranking',
            fields=[
                ('puntos', models.IntegerField(blank=True, editable=False, null=True)),
                ('producto_id', models.OneToOneField(on_delete=django.db.models.deletion.CASCADE, primary_key=True, serialize=False, to='artesanal.ProductoArtesanal')),
            ],
        ),
        migrations.AddField(
            model_name='valor',
            name='producto_id',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='artesanal.ProductoArtesanal', verbose_name='Cerveza'),
        ),
        migrations.AddField(
            model_name='productoartesanal',
            name='cerveceria',
            field=models.ManyToManyField(to='artesanal.Cerveceria', verbose_name='Distribuidor'),
        ),
    ]