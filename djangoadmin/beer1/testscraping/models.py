from django.db import models
# Create your models here.

class WebScraping(models.Model):
    marca = models.CharField(max_length=200, verbose_name="Marca")
    descripcion = models.CharField(max_length=200, blank=True, null=True, verbose_name="Descripción")
    cantidad = models.CharField(max_length=200, blank=True, null=True, verbose_name="Tamaño en cc")
    precio = models.FloatField(verbose_name="Precio en $")
    imagen = models.CharField(max_length=200, blank=True, null=True, verbose_name="Imagen URL")
    supermercado = models.CharField(max_length=200, blank=True, null=True, verbose_name="Super Mercado")

    class Meta:
        verbose_name = 'My Web Scraping'
        verbose_name_plural = 'My Web Scraping'

    def __str__(self):
        return '%s - %s' % (self.marca, self.cantidad)

class WebScrapingArtesanal(models.Model):
    marca = models.CharField(max_length=200, verbose_name="Marca")
    desc = models.CharField(max_length=200, blank=True, null=True, verbose_name="Descripción")
    cantidad = models.CharField(max_length=200, blank=True, null=True, verbose_name="Tamaño en cc")
    precio = models.FloatField(verbose_name="Precio en $")
    imagen = models.CharField(max_length=200, blank=True, null=True, verbose_name="Imagen URL ")
    supermercado = models.CharField(max_length=200, blank=True, null=True, verbose_name="Super Mercado")

    class Meta:
        verbose_name = 'My Web Scraping'
        verbose_name_plural = 'My Web Scraping Artesanal'

    def __str__(self):
        return '%s - %s' % (self.marca, self.cantidad)

class WebScrapingPremium(models.Model):
    marca = models.CharField(max_length=200, verbose_name="Marca")
    desc = models.CharField(max_length=200, blank=True, null=True, verbose_name="Descripción")
    cantidad = models.CharField(max_length=200, blank=True, null=True, verbose_name="Tamaño en cc")
    precio = models.FloatField(verbose_name="Precio en $")
    imagen = models.CharField(max_length=200, blank=True, null=True, verbose_name="Imagen URL ")
    supermercado = models.CharField(max_length=200, blank=True, null=True, verbose_name="Super Mercado")

    class Meta:
        verbose_name = 'My Web Scraping'
        verbose_name_plural = 'My Web Scraping Premium'

    def __str__(self):
        return '%s - %s' % (self.marca, self.cantidad)
