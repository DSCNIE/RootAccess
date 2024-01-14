import time
from django.contrib.auth.decorators import login_required
from django.contrib.auth import login, authenticate
from django.contrib.auth import logout
from django.contrib.auth.forms import AuthenticationForm
from django.shortcuts import render, redirect
from django.http import HttpResponse, JsonResponse
from django.views.decorators.csrf import csrf_exempt
from rest_framework.views import APIView
from django.contrib import messages
import traceback 

from .chat import get_response

class Chatbot(APIView):
    def get(self,request):
        userMessage = request.GET.get('IPmessage')
        chat_ans = str(get_response(str(userMessage)))
        message = {
            'message':chat_ans
        }
        print(message)
        return JsonResponse(message)

def home(request):
    return render(request, 'index.html')
