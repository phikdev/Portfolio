
      // Get the modal
      let modal = document.querySelector('#myModal');

      // Get the button that opens the modal
      let btn = document.querySelector(".myBtn");
      
      
      
      
      // When the user clicks on the button, open the modal
      btn.addEventListener('click', function(){
        modal.style.display = "block";
        console.log('afficher modale');
      });
      
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

var btn2 = document.querySelector(".btn2");