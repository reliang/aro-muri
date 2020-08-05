from django.shortcuts import render

# Create your views here.

def index(request):
    return render(request, "index.html", {})

def overview(request):
    return render(request, "project-overview.html", {})

def people(request):
	return render(request, "people.html", {})