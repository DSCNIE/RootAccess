# yourappname/urls.py

from django.urls import path
from . import views

urlpatterns = [
    path('', views.home, name='home'),
    path('execute_on_click/',views.execute_on_click.as_view(),name='execute_on_click')
]



