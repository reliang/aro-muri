from django.shortcuts import render

# Create your views here.


def overview(request):
    return render(request, "project-overview.html", {})
