
   const form = document.querySelector('form');
   form.onsubmit= (e)=> {
      e.preventDefault();
      fetch('register.php',{
         method:"POST",
         body: new FormData(form)
      }).then(res=>res.text()).then(e=>console.log(e))
   }
