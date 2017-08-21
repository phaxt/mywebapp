from django.contrib import admin
from django.contrib.auth.admin import UserAdmin as BaseUserAdmin
from django.contrib.auth.models import User
from django.contrib.auth.admin import UserAdmin

from .models import Producto, Perfil, UploadImagen


class ProductoAdmin(admin.ModelAdmin):
    list_display = ('marca', 'cantidad', 'precio')
    save_as = True

    def get_queryset(self, request):
        qs = super(ProductoAdmin, self).get_queryset(request)
        if request.user.is_superuser:
            return qs
        return qs.filter(user=request.user)

    def formfield_for_foreignkey(self, db_field, request, **kwargs):
        kwargs["initial"] = request.user.id
        if db_field.name == "user":
            kwargs["empty_label"] = "-------------"
            return db_field.formfield(**kwargs)
        return super(OrderAdmin, self).formfield_for_foreignkey(db_field, request, **kwargs)

class PerfilInline(admin.StackedInline):
    model = Perfil
    can_delete = False
    verbose_name_plural = 'Información Adicional'

class UserAdmin(BaseUserAdmin):
    inlines = (PerfilInline, )
    list_display = ('username','first_name','last_name','is_active')

class UploadImagenAdmin(admin.ModelAdmin):
    list_display = ('marca','descripcion')
    save_as = True


admin.site.unregister(User)
admin.site.register(User, UserAdmin)
admin.site.register(Producto, ProductoAdmin)
admin.site.register(UploadImagen, UploadImagenAdmin)
