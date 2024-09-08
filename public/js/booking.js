// payment button


        document.addEventListener('DOMContentLoaded', () => {
        let tapBoxes = document.querySelectorAll('.tap-box');
        let additionHoursInput = document.querySelector("#additional_hours");

        tapBoxes.forEach(box => {
            box.addEventListener('click', () => {
                
                box.classList.toggle('bg-orange-400');
                const itemUnselected = !box.classList.contains("bg-orange-400")
                if (box.dataset.item == "additional_hours" && itemUnselected){
                    additionHoursInput.value = 0
                    additionHoursInput.dispatchEvent(new Event('change'));
                    return
                }
                if (box.dataset.item == "additional_hours"){
                    
                    additionHoursInput.value = box.dataset.value
                    additionHoursInput.dispatchEvent(new Event('change'));
                    tapBoxes.forEach(b => {
                        if (b.dataset.item == "additional_hours"){
                            b.classList.remove('bg-orange-400');
                        }
                    });
                    box.classList.add('bg-orange-400');
                }
            });
        });
        });


        // HANDLE PACKAGE SELECTION

        document.addEventListener('DOMContentLoaded', () => {
            let boxes = document.querySelectorAll('.package-box');
            const packageInput = document.getElementById('package');
        
            boxes.forEach(box => {
                box.addEventListener('click', function () {
                    packageInput.value = this.dataset.package;
                    packageInput.dispatchEvent(new Event('change'));

                    boxes.forEach(b => {
                        b.classList.remove('border-[#F4845F]');
                    });
                
                    this.classList.add('border-[#F4845F]');


                    // Trigger an event to notify that the package has been updated
                    const event = new CustomEvent('packageUpdated', { detail: this.dataset.package });
                    document.dispatchEvent(event);
                });
            });

        });


        // HANDLE SUBMIT ENABLE/DISABLE
        document.getElementById("check_confirm").addEventListener("change", function() {
            if (this.checked){
                document.getElementById("confirmBookingButton").disabled = false
                return
            }
            
            document.getElementById("confirmBookingButton").disabled = true
        });

//  HANDLE STEP NAVIGATION
                
        
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
      
        // document.getElementById('confirmBookingButton').addEventListener('click', function() {
        //   if (currentStep === totalSteps) {
        //     // Redirect to payment page if on the last step
        //     window.location.href = '/payment';
        //   } else {
        //     // Move to the next step if not on the last step
        //     nextStep();
        //   }
        // });
      
        // Initialize
        showStep(currentStep);
