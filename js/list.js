function addItem() {
    let ul = document.querySelector('#list');
    let input = document.querySelector('#nameListTitle');
    let liDefault = document.querySelector('#li');

    let li = liDefault.cloneNode(true);
    li.classList.remove('d-none');
    li.classList.add('d-block');
    li.querySelector('.title').innerHTML = input.value;

    ul.append(li);

    input.value = '';
}

function changeTitleName(item) {
    let li = item.parentNode;
    let title = li.querySelector('.title');
    let input = document.querySelector('#nameListTitle');

    title.innerHTML = input.value;

    input.value = '';
}

function deleteItem(item) {
    let li = item.parentNode;
    let ul = li.parentNode;
    ul.removeChild(li);
}
