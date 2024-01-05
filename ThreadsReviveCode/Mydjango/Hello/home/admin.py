from django.contrib import admin
from home.models import Customer,Product,Order, Cart
# Register your models here.

admin.site.register(Customer)
admin.site.register(Product)
admin.site.register(Order)
admin.site.register(Cart)