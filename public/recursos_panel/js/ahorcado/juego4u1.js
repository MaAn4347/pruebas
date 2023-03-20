window.onload = function () {

  var alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',
  'i', 'j', 'k', 'l', 'm', 'n','ñ', 'o', 'p', 'q', 'r', 's',
  't', 'u', 'v', 'w', 'x', 'y', 'z'];
  
  var categories;         // Matriz de temas
  var chosenCategory;     // Categoría seleccionada
  var getHint ;           // Palabra getHint
  var word ;              /// palabra seleccionada
  var guess ;             // Geuss
  var geusses = [ ];      // Adivinanzas almacenadas
  var lives ;             // Vidas
  var counter ;           // Contar conjeturas correctas
  var space;              // Número de espacios en la palabra '-'

  // Get elements
  var showLives = document.getElementById("mylives");
  var showCatagory = document.getElementById("catagoryName");
  var getHint = document.getElementById("hint");
  var showClue = document.getElementById("clue");



  // create alphabet ul
  var buttons = function () {
    myButtons = document.getElementById('buttons');
    letters = document.createElement('ul');

    for (var i = 0; i < alphabet.length; i++) {
      letters.id = 'alphabet';
      list = document.createElement('li');
      list.id = 'letter';
      list.innerHTML = alphabet[i];
      check();
      myButtons.appendChild(letters);
      letters.appendChild(list);
    }
  }
    
  
  // Select Catagory
  var selectCat = function () {
    if (chosenCategory === categories[0]) {
      catagoryName.innerHTML = "La categoría elegida es: Finalidad de la administración de la información";
    } else if (chosenCategory === categories[1]) {
      catagoryName.innerHTML = "La categoría elegida es: Procedimiento de la administración de la información";
    }
    
  }

  // Create geusses ul
   result = function () {
    wordHolder = document.getElementById('hold');
    correct = document.createElement('ul');

    for (var i = 0; i < word.length; i++) {
      correct.setAttribute('id', 'my-word');
      guess = document.createElement('li');
      guess.setAttribute('class', 'guess');
      if (word[i] === "-") {
        guess.innerHTML = "-";
        space = 1;
      } else {
        guess.innerHTML = "_";
      }

      geusses.push(guess);
      wordHolder.appendChild(correct);
      correct.appendChild(guess);
    }
  }
  
  // Show lives
   comments = function () {
    showLives.innerHTML = "Tienes " + lives + " Vidas";
    if (lives < 1) {
      showLives.innerHTML = "Juego terminado";
    }
    for (var i = 0; i < geusses.length; i++) {
      if (counter + space === geusses.length) {
        showLives.innerHTML = "¡Tú ganas!";
      }
    }
  }

      // Animate man
  var animate = function () {
    var drawMe = lives ;
    drawArray[drawMe]();
  }

  
   // Hangman
  canvas =  function(){

    myStickman = document.getElementById("stickman");
    context = myStickman.getContext('2d');
    context.beginPath();
    context.strokeStyle = "black";
    context.lineWidth = 2;
  };
  
    head = function(){
      myStickman = document.getElementById("stickman");
      context = myStickman.getContext('2d');
      context.beginPath();
      context.arc(60, 25, 10, 0, Math.PI*2, true);
      context.stroke();
    }
    
  draw = function($pathFromx, $pathFromy, $pathTox, $pathToy) {
    
    context.moveTo($pathFromx, $pathFromy);
    context.lineTo($pathTox, $pathToy);
    context.stroke(); 
}

   frame1 = function() {
     draw (0, 150, 150, 150);
   };
   
   frame2 = function() {
     draw (10, 0, 10, 600);
   };
  
   frame3 = function() {
     draw (0, 5, 70, 5);
   };
  
   frame4 = function() {
     draw (60, 5, 60, 15);
   };
  
   torso = function() {
     draw (60, 36, 60, 70);
   };
  
   rightArm = function() {
     draw (60, 46, 100, 50);
   };
  
   leftArm = function() {
     draw (60, 46, 20, 50);
   };
  
   rightLeg = function() {
     draw (60, 70, 100, 100);
   };
  
   leftLeg = function() {
     draw (60, 70, 20, 100);
   };
  
  drawArray = [rightLeg, leftLeg, rightArm, leftArm,  torso,  head, frame4, frame3, frame2, frame1]; 


  // OnClick Function
   check = function () {
    list.onclick = function () {
      var geuss = (this.innerHTML);
      this.setAttribute("class", "active");
      this.onclick = null;
      for (var i = 0; i < word.length; i++) {
        if (word[i] === geuss) {
          geusses[i].innerHTML = geuss;
          counter += 1;
        } 
      }
      var j = (word.indexOf(geuss));
      if (j === -1) {
        lives -= 1;
        comments();
        animate();
      } else {
        comments();
      }
    }
  }
  
    
  // Play
  play = function () {
    categories = [
        ["gestionada","privacidad","accesibilidad"],
        ["recopilacion"," procesamiento","almacenamiento","distribucion","actualizacion"]
    ];

    chosenCategory = categories[Math.floor(Math.random() * categories.length)];
    word = chosenCategory[Math.floor(Math.random() * chosenCategory.length)];
    word = word.replace(/\s/g, "-");
    console.log(word);
    buttons();

    geusses = [ ];
    lives = 10;
    counter = 0;
    space = 0;
    result();
    comments();
    selectCat();
    canvas();
  }

  play();
  
  // Hint

    hint.onclick = function() {

      hints = [
        ["Esta palabra tiene que ver con el proceso de administrar y controlar la información de manera efectiva y eficiente en una organización.","Esta palabra tiene que ver con la protección y el control del acceso a la información confidencial de una empresa.","Esta palabra tiene que ver con la capacidad de los usuarios autorizados para acceder a la información de manera oportuna y segura."],
        ["Esta palabra se refiere a la etapa en la que se reúnen los datos necesarios para la toma de decisiones y el cumplimiento de los objetivos de la empresa.","Esta palabra se refiere a la etapa en la que se convierten los datos en información relevante y útil para la empresa.","Esta palabra se refiere a la etapa en la que se guardan los datos procesados en sistemas de gestión de información para garantizar su acceso y seguridad.","Esta palabra se refiere a la etapa en la que se comparte la información relevante con los usuarios que la necesitan para tomar decisiones y cumplir con los objetivos de la empresa.","Esta palabra se refiere al proceso de mantener la información actualizada y precisa para garantizar su relevancia y utilidad en la toma de decisiones y el cumplimiento de los objetivos de la empresa."]
  
    ];

    var catagoryIndex = categories.indexOf(chosenCategory);
    var hintIndex = chosenCategory.indexOf(word);
    showClue.innerHTML = "Pista: - " +  hints [catagoryIndex][hintIndex];
  };

   // Reset

  document.getElementById('Reiniciar').onclick = function() {
    correct.parentNode.removeChild(correct);
    letters.parentNode.removeChild(letters);
    showClue.innerHTML = "";
    context.clearRect(0, 0, 400, 400);
    play();
  }
}


