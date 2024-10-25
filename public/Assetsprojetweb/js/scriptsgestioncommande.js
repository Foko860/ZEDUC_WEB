document.addEventListener('DOMContentLoaded', function () {
  // Modifier un employé
  document.querySelectorAll('.edit-btn').forEach(button => {
      button.addEventListener('click', function() {
          let row = this.closest('tr');
          let id = row.cells[0].innerText;
          let name = row.cells[1].innerText;
          let prenom = row.cells[2].innerText;
          let email = row.cells[3].innerText;
          let poste = row.cells[4].innerText.trim();
          
          // Remplir les champs du formulaire de modification
          document.getElementById('editEmployeeId').value = id;
          document.getElementById('editEmployeeName').value = name;
          document.getElementById('editEmployeePrenom').value = prenom;
          document.getElementById('editEmployeeEmail').value = email;
          document.getElementById('editEmployeePoste').value = poste;

          // Afficher la modale
          let editModal = new bootstrap.Modal(document.getElementById('editEmployeeModal'));
          editModal.show();
      });
  });

  // Ajouter un employé
  document.querySelector('.add-employee-btn').addEventListener('click', function() {
      let addModal = new bootstrap.Modal(document.getElementById('addEmployeeModal'));
      addModal.show();
  });

  // Sauvegarder les modifications de l'employé
  document.getElementById('saveChangesBtn').addEventListener('click', function() {
      let id = document.getElementById('editEmployeeId').value;
      let name = document.getElementById('editEmployeeName').value;
      let prenom = document.getElementById('editEmployeePrenom').value;
      let email = document.getElementById('editEmployeeEmail').value;
      let poste = document.getElementById('editEmployeePoste').value;

      console.log('Updated Employee:', { id, name, prenom, email, poste });
      
      let editModal = bootstrap.Modal.getInstance(document.getElementById('editEmployeeModal'));
      editModal.hide();
  });

  // Supprimer un employé
  document.querySelectorAll('.delete-btn').forEach(button => {
      button.addEventListener('click', function() {
          let row = this.closest('tr');
          let name = row.cells[1].innerText;
          let confirmation = confirm(`Voulez-vous vraiment supprimer l'employé ${name} ?`);
          if (confirmation) {
              row.remove();
              alert(`${name} a été supprimé avec succès.`);
          }
      });
  });

  // Ajouter un employé
  document.getElementById('addEmployeeBtn').addEventListener('click', function() {
      let name = document.getElementById('newEmployeeName').value;
      let prenom = document.getElementById('newEmployeePrenom').value;
      let email = document.getElementById('newEmployeeEmail').value;
      let poste = document.getElementById('newEmployeePoste').value;

      console.log('New Employee:', { name, prenom, email, poste });

      document.getElementById('addEmployeeForm').reset();

      let addModal = bootstrap.Modal.getInstance(document.getElementById('addEmployeeModal'));
      addModal.hide();
  });
});
