from django.db import models

# Create your models here.

class Cerveceria(models.Model):
    nombre_local = models.CharField(max_length=100, verbose_name="Distribuidor")
    ubicacion = models.CharField(max_length=250, verbose_name="Dirección")
    horario_atencion = models.CharField(max_length=250, blank=True, null=True, verbose_name="Horario de atención")

    class Meta:
        verbose_name = 'Local'
        verbose_name_plural = 'Locales'

    def __str__(self):
        return self.nombre_local

FERM = [
  (1, ("ALE")),
  (2, ("LAGER")),
]

class ProductoArtesanal(models.Model):
    nombre_cerveza = models.CharField(max_length=100, verbose_name="Nombre")
    tipo_fermentacion = models.IntegerField(choices=FERM, verbose_name="Fermentación")
    descripcion = models.TextField(max_length=250, verbose_name="Descripción")
    imagen_artesanal = models.CharField(max_length=250, default="./images/nombre_imagen.ext", verbose_name="Ruta de la imagen")
    posicion_ranking = models.FloatField(max_length=255, blank=True, null=True, editable=False)
    cerveceria = models.ManyToManyField(Cerveceria, verbose_name="Distribuidor")

    class Meta:
        verbose_name = 'Cerveza'
        verbose_name_plural = 'Cervezas'

    def __str__(self):
        return self.nombre_cerveza
'''
class Ranking(models.Model):
    puntos = models.IntegerField(blank=True, null=True, editable=False)
    producto_id = models.OneToOneField(
        ProductoArtesanal,
        on_delete=models.CASCADE,
        primary_key=True,
    )

'''
class Valor(models.Model):
    producto_id = models.ForeignKey(ProductoArtesanal, null=False, blank=False, on_delete=models.CASCADE, verbose_name="Cerveza")
    cerveceria_id = models.ForeignKey(Cerveceria, null=False, blank=False, on_delete=models.CASCADE, verbose_name="Distribuidor")
    precio = models.PositiveIntegerField(blank=False, null=False, default=0, verbose_name="Precio en $")

    class Meta:
        verbose_name = 'Precio'
        verbose_name_plural = 'Precios'
