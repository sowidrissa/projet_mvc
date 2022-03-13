const form = document.getElementById('form1')
  const champ4 = document.getElementById('champ4');
  const click1 = document.getElementById('click1')
  const repChoice = document.getElementById('repChoice');

  let i = 1

  function choice() {
      champ4.innerHTML = ''
      const newDiv = document.createElement('div')

      i = 1
      if (repChoice.value == 'repText') {


          newDiv.innerHTML = `
        <label for="">Réponse</label>
         <input type="text" name="repText"/> 
                   `
      }
      champ4.appendChild(newDiv);

  }



  function addInput() {

      const nbrReponse = document.getElementById('nbrReponse');
      nbrReponse.value = i;

      const newDiv = document.createElement('div')

      if (repChoice.value == 'repMultiple') {

          newDiv.innerHTML = `  <label for="">Réponse ${i}</label>
            <input id="quatro" type="text" name="rep_${i}">
            <input type="checkbox" name="fama[]" value="${i}">       
`
      } else if (repChoice.value == 'repSimple') {

          newDiv.innerHTML = `  <label for="">Réponse ${i}</label>
            <input id="quatro" type="text" name="rep_${i}">
            <input type="radio" id="dewey" name="fama[]" value='${i}'>
            
        `
      }
      champ4.appendChild(newDiv);
      i++;

  }