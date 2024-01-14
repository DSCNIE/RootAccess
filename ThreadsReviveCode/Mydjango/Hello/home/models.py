from django.db import models

# Create your models here.
from django.db import models

# Create your models here.
class Customer(models.Model):
    name=models.CharField(max_length=20)
    mobile=models.IntegerField()
    email=models.CharField(max_length=20)
    address=models.CharField(max_length=50)
    pin=models.IntegerField()
    type=models.BooleanField()

    def __str__(self):
        return self.name

class Product(models.Model):
    productid = models.CharField(max_length=50, unique=True)
    stock = models.IntegerField()
    price = models.DecimalField(max_digits=10, decimal_places=2)
    category = models.CharField(max_length=50)
    img=models.ImageField()

    def __str__(self):
        return self.productid

class Order(models.Model):
    product = models.ForeignKey(Product, on_delete=models.CASCADE)
    customer = models.ForeignKey(Customer, on_delete=models.CASCADE)
    number = models.IntegerField()
    time = models.TimeField(auto_now_add=True)
    date = models.DateField(auto_now_add=True)

    def __str__(self):
        return f"{self.product.Product_ID} - {self.customer.name} - {self.date}"


class Cart(models.Model):
    customerid=models.IntegerField()
    number=models.IntegerField()
    def __str__(self):
        return self.customerid
    
    