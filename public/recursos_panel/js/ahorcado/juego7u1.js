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
        catagoryName.innerHTML = "La categoría elegida es: Procedimiento del diseño de las politícas comerciales ";
      } else if (chosenCategory === categories[1]) {
        catagoryName.innerHTML = "La categoría elegida es: Finalidad del diseño de las politícas comerciales ";
      } else if (chosenCategory === categories[2]) {
        catagoryName.innerHTML = "La categoría elegida es: Características del diseño de politicas comerciales";
      }
      else if (chosenCategory === categories[3]) {
        catagoryName.innerHTML = "La categoría elegida es: Tipos de políticas comerciales ";
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
          ["competitividad", "crecimiento-economico", "bienestar-social", "intereses-nacionales"],
          ["innovacion", "barreras-comerciales", "propiedad-intelectual"],
          ["oferta-y-demanda", "ajustes", "coordinacion", "objetivos-a-largo-plazo"],
          ["aranceles","cuotas","subsidios","libre-comercio ","regulacion"]
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
          ["Esta palabra se refiere a la capacidad de una empresa o país para mantenerse en el mercado global.","Palabra que se refiere al aumento en la producción y la inversión que puede ser estimulada por las políticas comerciales.","Esta palabra se refiere a la mejora en la calidad de vida de la población a través de un acceso más fácil a bienes y servicios a precios más bajos.","Esta palabra se refiere a los objetivos y necesidades de un país que pueden ser protegidos a través de políticas comerciales."],
          ["Esta palabra se refiere a la capacidad de una empresa o país para crear y desarrollar nuevas ideas y soluciones."," Esta palabra se refiere a las medidas que se establecen para limitar o controlar el comercio internacional.","Esta palabra se refiere a los derechos de autor, patentes y marcas registradas que protegen la propiedad intelectual de una empresa o país."],
          ["Dos palabras relacionadas con la orientación del diseño de políticas comerciales hacia el mercado.","Una palabra relacionada con la flexibilidad que se requiere en las políticas comerciales para adaptarse a las condiciones cambiantes del mercado.","Una palabra que describe la necesidad de una buena comunicación y cooperación entre diferentes actores involucrados en las políticas comerciales.","Tres palabras relacionadas con el enfoque a largo plazo que se necesita para lograr los objetivos de las políticas comerciales."],
          [" Impuestos a las importaciones extranjeras.","Límites a la cantidad de bienes y servicios importados de un país.","Transferencias financieras del gobierno a empresas locales.","Eliminación de barreras comerciales entre países.","Políticas que regulan las prácticas comerciales y protegen a los consumidores y empresas locales."]
          
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
  
  
  