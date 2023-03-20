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
        catagoryName.innerHTML = "La categoría elegida es: Finalidad de la fijación de objetivos comerciales dentro del proyecto";
      } else if (chosenCategory === categories[1]) {
        catagoryName.innerHTML = "La categoría elegida es: Procedimiento de fijación de objetivos comerciales";
      } else if (chosenCategory === categories[2]) {
        catagoryName.innerHTML = "La categoría elegida es: Características de la fijación de objetivos comerciales";
      }
      else if (chosenCategory === categories[3]) {
        catagoryName.innerHTML = "La categoría elegida es: Tipos de objetivos comerciales ";
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
          ["realista", "estrategia", "desempeño", "motivacion", "decisiones"],
          ["objetivos", "analisis", "publico", "estrategias", "indicadores"],
          ["sistematico", "medibles ", "realistas", "actualizacion"],
          ["rentabilidad","imagen-de-marca","cuota-de-mercado","fidelizacion"]
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
          ["Los objetivos deben ser factibles y alcanzables.","Los objetivos orientan la estrategia comercial del proyecto.","Los objetivos permiten realizar un seguimiento y medición del desempeño del proyecto.","Los objetivos pueden ser una fuente de motivación para el equipo del proyecto.","Los objetivos pueden ser una guía para la toma de decisiones dentro del proyecto."],
          ["Palabra clave del texto","Identificación de oportunidades y amenazas","Definición clara del mercado objetivo","Desarrollo de planes para alcanzar los objetivos","Métricas para medir el progreso hacia los objetivos"],
          ["Se refiere a un proceso organizado y estructurado para establecer metas.","Los objetivos deben ser específicos y mensurables para evaluar el progreso.","Las metas deben ser factibles y alcanzables.","Los objetivos deben ser revisados y actualizados regularmente para asegurarse de que siguen siendo relevantes."],
          ["Se trata de mejorar la rentabilidad de la empresa reduciendo los costos o aumentando los ingresos.","Se refiere a mejorar la percepción que los clientes y el público tienen de la marca mediante la creación de campañas publicitarias efectivas, programas de responsabilidad social corporativa, entre otros.","Este objetivo implica aumentar la participación de la empresa en el mercado en el que opera, ya sea en términos de ventas o de valor.","Se trata de retener y fidelizar a los clientes existentes de la empresa mediante la mejora de la calidad del servicio al cliente, la creación de programas de fidelización y la personalización de la oferta de productos o servicios."]
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
  
  
  