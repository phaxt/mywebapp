from django.contrib import admin

# Register your models here.
from .models import ProductoArtesanal, Cerveceria, Valor

admin.site.register(ProductoArtesanal)
admin.site.register(Cerveceria)
admin.site.register(Valor)
