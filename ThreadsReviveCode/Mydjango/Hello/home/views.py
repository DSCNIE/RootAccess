from django.shortcuts import render, HttpResponse
from django.shortcuts import render
from django.http import JsonResponse
import clarifai
from home.models import Product
# thecode before was 
from clarifai.rest import ClarifaiApp
# from clarifai.rest import ClarifaiApp

# Create your views here.
def index(request):
    if request.method== 'POST':
        return HttpResponse("Done Bro!")

    else:
        return render(request, "index.html")
    # return HttpResponse("This is Homepage!") 
def about(request):
    return HttpResponse("This is About!") 

def services(request):
    return render(request, "services.html")
    # return HttpResponse("This is Services!") 

def contact(request):
    return HttpResponse("This is ContactUs!")

def seller(request):
    if request.method== 'POST':
        productid= request.POST.get('productid')
        price= request.POST.get('price')
        product=Product(productid=productid, price=price)
        product.save()
        return HttpResponse("Done broooo")
    else:
        # return HttpResponse("Not done broo")
        return render(request, "trail.html")
    
def buyer(request):
    return render(request, "buyer.html")

def signin(request):
    return render(request, "signin.html")
    # return HttpResponse("This is ContactUs!")

# clarifai

def classify_image(request):
    if request.method == 'POST':
        image_url = request.POST.get('image_url')  # Assuming you are sending image URL
        
        # Initialize Clarifai app with your API key
        app = ClarifaiApp(api_key='31bdb29f63914b05bd26f2fa17fad67b')

        # Use the general model for image classification
        model = app.public_models.general_model
        response = model.predict_by_url(url=image_url)

        # Parse the response and get relevant information
        concepts = response['outputs'][0]['data']['concepts']

        # You can send the concepts to your template or perform any other action
        return HttpResponse("Done bro!")
        # return JsonResponse({'concepts': concepts})
    else:
        return HttpResponse("Cannot find the image error. Contact Admin.")  