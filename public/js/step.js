        
        
        let currentStep = 1;

        let totalSteps = 4;
      
        function showStep(step) {
          const steps = document.querySelectorAll('.step');
          steps.forEach((s) => s.classList.add('hidden'));
          document.getElementById(`step${step}`).classList.remove('hidden');
        }
      
        function nextStep() {
          currentStep++;
          if (currentStep > totalSteps) currentStep = totalSteps; // Ensure it doesn’t exceed total steps
          showStep(currentStep);
        }
      
        function prevStep() {
          currentStep--;
          if (currentStep < 1) currentStep = 1; // Ensure it doesn’t go below 1
          showStep(currentStep);
        }
      
        document.getElementById('confirmBookingButton').addEventListener('click', function() {
          if (currentStep === totalSteps) {
            // Redirect to payment page if on the last step
            window.location.href = '/payment';
          } else {
            // Move to the next step if not on the last step
            nextStep();
          }
        });
      
        // Initialize
        showStep(currentStep);