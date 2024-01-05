# yourprojectname/urls.py

from django.contrib import admin
from django.urls import include, path

from techapp.views import execute_on_click

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', include('techapp.urls')),
]

