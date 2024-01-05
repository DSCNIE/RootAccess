from django.contrib import admin
from django.urls import path
from home import views
from django.urls import path
from .views import classify_image


urlpatterns = [
    path("", views.index, name="home"),
    path("about", views.about, name="about"),
    path("services", views.services, name="services"),
    path("signin.html", views.signin, name="signin.html"),
    path("contact", views.contact, name="contact"),
    path("trail.html", views.seller, name="trail"),
    path("buyer.html", views.buyer, name="buyer"),
    path('classify/', views.classify_image, name='classify_image')
]
