from django.shortcuts import render

# yourappname/views.py

# yourappname/views.py

from django.http import JsonResponse
from subprocess import Popen, PIPE
from django.views.decorators.csrf import csrf_exempt
import os

@csrf_exempt
def execute_script(request):
    if request.method == 'POST':
        try:
            # Specify the path to your main.py script
            script_path = os.path.join(os.path.dirname(os.path.abspath(__file__)), '..', '..', 'hackathon', 'newMain.py')

            # Execute the script
            process = Popen(['python', script_path], stdout=PIPE, stderr=PIPE)
            stdout, stderr = process.communicate()

            # Check the result
            if process.returncode == 0:
                return JsonResponse({'success': True, 'message': 'Script executed successfully', 'output': stdout.decode()})
            else:
                return JsonResponse({'success': False, 'message': 'Error executing script', 'error': stderr.decode()}, status=500)
        except Exception as e:
            return JsonResponse({'success': False, 'message': str(e)}, status=500)
    else:
        return JsonResponse({'success': False, 'message': 'Invalid request method'}, status=400)
