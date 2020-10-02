const items = [
  ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpg'], 
  ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpg'],
  ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
  ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpg']
]

function fetchData(data) {
  let html = "<div class='row'>"
  data.forEach(el => {
    html += `
    <div class="col items">
      <div class="card" style="width: 18rem;">
        <img src="./public/img/${el[4]}" class="card-img-top image-card p-0" alt="${el[1]}">
        <div class="card-body">
            <h5 class="card-title" id="itemName">${el[1]}</h5>
            <p class="card-text item-desc" id="itemDesc">${el[3]}</p>
            <p class="card-text">Rp ${el[2].toLocaleString("id-ID")}</p>
            <button href="#" class="btn btn-primary" onclick="event.preventDefault(); addProduct()" id="addCart">Tambahkan ke keranjang</button>
        </div>
      </div>
    </div>
    `
  })
  html += "</div>"
  listBarang.innerHTML = html;
}

function submitForm() {
  let word = keyword.value;
  if (word) {
    let data = items.filter(el => el[1].toLowerCase().includes(word.toLowerCase()));
    fetchData(data)
  } else {
    fetchData(items)
  }
}

function addProduct() {
  cartValue.innerHTML++
}