from django.urls import path
from . import views

urlpatterns = [
    # path('getResponse/',views.Chatbot.as_view(),name='getResponse'),
    path('home/',views.home,name="HomePage"),
    path('getResponse/',views.Chatbot.as_view(),name='getResponse'),
]