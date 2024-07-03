
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



jQuery(document).ready(function($) {
  console.log("script.js is loaded");

  // Cacher le bouton 'btnL' lorsque le filtre est utilisé
  $('#category-filter').change(function() {
      var selectedCategory = $(this).val();
      console.log("Selected category: ", selectedCategory); // Ajouté pour debug

      if (selectedCategory !== "") {
          $('#btnL').hide(); // Cacher le bouton si une catégorie est sélectionnée
      } else {
          $('#btnL').show(); // Afficher le bouton si aucune catégorie n'est sélectionnée
      }

      $.ajax({
          url: ajax_params.ajax_url,
          type: 'POST',
          data: {
              action: 'filter_posts',
              category: selectedCategory,
          },
          success: function(response) {
              console.log("AJAX response: ", response); // Ajouté pour debug
              $('#posts-container').html(response);
          },
          error: function(error) {
              console.log("AJAX error: ", error); // Ajouté pour debug
          }
      });
  });

  let currentPage = 1;

  $('#btnL').on('click', function() {
      currentPage++;

      $.ajax({
          type: 'POST',
          url: ajax_params.ajax_url,
          dataType: 'json',
          data: {
              action: 'weichie_load_more',
              paged: currentPage,
          },
          success: function(data) {
              $('#posts-container').append(data.html);
              if (!data.more) {
                  $('#btnL').hide(); // Cacher le bouton si toutes les photos sont affichées
              }
          }
      });
  });
});
