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
      catagoryName.innerHTML = "La categoría elegida es: Procedimiento del Análisis FODA";
    } else if (chosenCategory === categories[1]) {
      catagoryName.innerHTML = "La categoría elegida es: Finalidad del análisis FODA";
    } else if (chosenCategory === categories[2]) {
      catagoryName.innerHTML = "La categoría elegida es: Análisis interno del FODA";
    }
    else if (chosenCategory === categories[3]) {
      catagoryName.innerHTML = "La categoría elegida es: Análisis externo del FODA ";
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
        ["fortalezas"," debilidades","oportunidades","amenazas","analisis","estrategias"],
        ["fortalezas"," debilidades"],
        ["recursos-financieros","calidad-del-producto","cadena-de-suministro","innovacion"],
        ["competencia ","regulaciones","cecnologias-emergentes"]
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
        ["Áreas en las que la empresa tiene ventaja sobre la competencia.", "Áreas en las que la empresa tiene deficiencias o desventajas respecto a la competencia.","Áreas de crecimiento o expansión en el mercado.","Tendencias o factores externos que pueden afectar negativamente a la empresa.","Proceso de revisión y evaluación de la información recopilada.","Acciones a desarrollar para mejorar la posición de la empresa en el mercado."],
        ["Algo en lo que una empresa o producto/servicio es bueno y le da ventaja en el mercado.","Algo en lo que una empresa o producto/servicio tiene carencias y puede ser vulnerable en el mercado."],
        ["Un aspecto interno de una empresa que se evalúa en el análisis interno.","Un aspecto interno de una empresa que se evalúa en el análisis interno.","Un proceso de negocio que se evalúa en el análisis interno para identificar oportunidades de mejora.","Una capacidad interna de una empresa que se evalúa en el análisis interno para identificar posibles ventajas competitivas."],
        ["Rivalidad entre empresas en un mercado determinado.","Normas gubernamentales que afectan el funcionamiento de una empresa.","Nuevos avances tecnológicos que pueden impactar en la industria en la que opera la empresa."],
  
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


