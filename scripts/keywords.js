let input, hashtagArray, container, t, tagsCount;

input = document.querySelector('#hashtags');
container = document.querySelector('.tag-container');
hashtagArray = [];
tagsCount = 3;

input.addEventListener('keyup', () => {
    if (tagsCount > 0) {
      if ((event.which == 13 || event.which== 32) && input.value.length > 0) {
        var text = document.createTextNode(input.value);
        var p = document.createElement('p');
        container.appendChild(p);
        p.appendChild(text);
        p.classList.add('tag');
        input.value = '';
        tagsCount--;
        
        let deleteTags = document.querySelectorAll('.tag');
        
        for(let i = 0; i < deleteTags.length; i++) {
          deleteTags[i].addEventListener('click', () => {
            container.removeChild(deleteTags[i]);
            tagsCount++; 
          });
        }
      }
    }
});
