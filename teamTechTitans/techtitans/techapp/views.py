# from django.shortcuts import render, HttpResponse

# # yourappname/views.py

# # yourappname/views.py

# from django.http import JsonResponse
# from subprocess import Popen, PIPE
# from django.views.decorators.csrf import csrf_exempt
# import os

# @csrf_exempt
# def execute_script(request):
#     if request.method == 'POST':
#         try:
#             # Specify the path to your main.py script
#             script_path = os.path.join(os.path.dirname(os.path.abspath(__file__)), '..', '..', 'hackathon', 'newMain.py')

#             # Execute the script
#             process = Popen(['python', script_path], stdout=PIPE, stderr=PIPE)
#             stdout, stderr = process.communicate()

#             # Check the result
#             if process.returncode == 0:
#                 return JsonResponse({'success': True, 'message': 'Script executed successfully', 'output': stdout.decode()})
#             else:
#                 return JsonResponse({'success': False, 'message': 'Error executing script', 'error': stderr.decode()}, status=500)
#         except Exception as e:
#             return JsonResponse({'success': False, 'message': str(e)}, status=500)
#     else:
#         return JsonResponse({'success': False, 'message': 'Invalid request method'}, status=400)



# yourappname/views.py

from django.http import JsonResponse
from subprocess import Popen, PIPE
from django.views.decorators.csrf import csrf_exempt
import os
from rest_framework.views import APIView
from django.shortcuts import render, redirect

def home(request):
    return render(request,'project.html')

# class execute_script(APIView):
#     def get(self,request):
#         if request.method == 'POST':
#             try:
#                 # Specify the path to your newMain.py script
#                 script_path = os.path.join(os.path.dirname(os.path.abspath(__file__)), '..', '..', 'facial-landmarks-recognition', 'newMain.py')
#                 # script_path = os.path.join(os.path.dirname(os.path.abspath(__file__)), os.path.join"D:\\hackathon\\facial-landmarks-recognition", "shape_predictor_68_face_landmarks.dat")
#                 # Execute the script
#                 process = Popen(['python', script_path], stdout=PIPE, stderr=PIPE)
#                 stdout, stderr = process.communicate()

#                 # Check the result
#                 if process.returncode == 0:
#                     return JsonResponse({'success': True, 'message': 'Script executed successfully', 'output': stdout.decode()})
#                 else:
#                     return JsonResponse({'success': False, 'message': 'Error executing script', 'error': stderr.decode()}, status=500)
#             except Exception as e:
#                 return JsonResponse({'success': False, 'message': str(e)}, status=500)
#         else:
#             return JsonResponse({'success': False, 'message': 'Invalid request method'}, status=400)

# @csrf_exempt
# def execute_script(request):
#     if request.method == 'POST':
#         try:
#             # Specify the path to your newMain.py script
#             script_path = os.path.join(os.path.dirname(os.path.abspath(__file__)), '..', '..', 'facial-landmarks-recognition', 'newMain.py')
#             # script_path = os.path.join(os.path.dirname(os.path.abspath(__file__)), os.path.join"D:\\hackathon\\facial-landmarks-recognition", "shape_predictor_68_face_landmarks.dat")
#             # Execute the script
#             process = Popen(['python', script_path], stdout=PIPE, stderr=PIPE)
#             stdout, stderr = process.communicate()

#             # Check the result
#             if process.returncode == 0:
#                 return JsonResponse({'success': True, 'message': 'Script executed successfully', 'output': stdout.decode()})
#             else:
#                 return JsonResponse({'success': False, 'message': 'Error executing script', 'error': stderr.decode()}, status=500)
#         except Exception as e:
#             return JsonResponse({'success': False, 'message': str(e)}, status=500)
#     else:
#         return JsonResponse({'success': False, 'message': 'Invalid request method'}, status=400)

# from newMain2 import mainfunction

class execute_on_click(APIView):
    def get(self,request):
        p = "shape_predictor_68_face_landmarks.dat"
        detector = dlib.get_frontal_face_detector()
        predictor = dlib.shape_predictor(p)

        # Initialize variables
        sleep, drowsy, active = 0, 0, 0
        status, color = "", (0, 0, 0)

        def compute(ptA, ptB):
            return np.linalg.norm(ptA - ptB)

        def blinked(a, b, c, d, e, f):
            up = compute(b, d) + compute(c, e)
            down = compute(a, f)
            ratio = up / (2.0 * down)

            if ratio > 0.25:
                return 2
            elif 0.21 < ratio <= 0.25:
                return 1
            else:
                return 0

        # Open a video capture object
        cap = cv2.VideoCapture(0)

        # Check if the video capture is opened successfully
        if not cap.isOpened():
            print("Error: Could not open camera.")
            exit()

        while True:
            _, frame = cap.read()
            if frame is None:
                print("Error: Could not read frame.")
                break

            gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)

            # Detect faces in the grayscale image
            faces = detector(gray, 0)

            for face in faces:
                x1, y1, x2, y2 = face.left(), face.top(), face.right(), face.bottom()

                face_frame = frame.copy()
                cv2.rectangle(face_frame, (x1, y1), (x2, y2), (0, 255, 0), 2)

                landmarks = predictor(gray, face)
                landmarks = face_utils.shape_to_np(landmarks)

                left_blink = blinked(landmarks[36], landmarks[37], landmarks[38], landmarks[41], landmarks[40], landmarks[39])
                right_blink = blinked(landmarks[42], landmarks[43], landmarks[44], landmarks[47], landmarks[46], landmarks[45])

                if left_blink == 0 or right_blink == 0:
                    sleep += 1
                    drowsy, active = 0, 0
                    if sleep > 6:
                        status, color = "SLEEPING !!!", (255, 0, 0)
                elif 0 < left_blink == 1 or right_blink == 1:
                    drowsy += 1
                    sleep, active = 0, 0
                    if drowsy > 6:
                        status, color = "Drowsy !", (0, 0, 255)
                else:
                    active += 1
                    sleep, drowsy = 0, 0
                    if active > 6:
                        status, color = "Active :)", (0, 255, 0)

                cv2.putText(frame, status, (100, 100), cv2.FONT_HERSHEY_SIMPLEX, 1.2, color, 3)

                for (x, y) in landmarks:
                    cv2.circle(face_frame, (x, y), 1, (255, 255, 255), -1)

                cv2.imshow("Frame", frame)
                cv2.imshow("Result of detector", face_frame)

            key = cv2.waitKey(1)
            if key == 27:
                break

        # Release the video capture object and close all OpenCV windows
        cap.release()
        cv2.destroyAllWindows()


# @csrf_exempt
# def execute_on_click(request):
#     if request.method == 'GET':
#         try:
#             return JsonResponse({'success': True, 'message': 'Button click functionality executed'})
#         except Exception as e:
#             return JsonResponse({'success': False, 'message': str(e)}, status=500)
#     else:
#         return JsonResponse({'success': False, 'message': 'Invalid request method'}, status=400)
