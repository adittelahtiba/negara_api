// alert('tes latihan js');
// confirm('kamu ganteng?');
// var cal = prompt('kalkulator ilmiah?');
// cal = parseInt(cal);
// console.log(cal);

console.log(this);

for (var i = 0; i < 10; i++) {
    console.log('for\n');
}

function tambah() {
    var hasil = 0;
    for (var i = 0; i < arguments.length; i++) {
        hasil = hasil + arguments[i];
    }
    return hasil;
}

var luas = tambah(1, 2, 3, 4, 7);

var luas2 = ['a', 'b', 'c']

console.log(luas);
console.log(luas2.join(' - '));

let Manusia = {
    nama: ['Aditya', 'Rama', 'Azka'],
    umur: 22,
    pekerjaan: 'Web Programmer',
    sapa: function () {
        return 'Hi, Nama saya ' + this.nama[1] + ' Usia saya ' + this.umur + ' tahun dan saya adalah seorang ' + this.pekerjaan;
    }

}

console.log(Manusia.sapa());

function buatOjek(nama, umur, pekerjaan) {
    var Orang = {}
    Orang.nama = nama;
    Orang.umur = umur;
    Orang.pekerjaan = pekerjaan;
    return Orang;
}

var manusia2 = buatOjek('Jajang', 40, 'Bos Besar');
console.log(manusia2);

function Ojekkonstraktor() {

    this.nama = 'nama';
    this.umur = 'umur';
    this.pekerjaan = 'pekerjaan';

}
var manusia3 = new Ojekkonstraktor();
console.log(manusia3.nama);

function Angkot(supir, trayek, penumpang, kas) {
    this.supir = supir;
    this.trayek = trayek;
    this.penumpang = penumpang;
    this.kas = kas;

    this.sabarahapn = function () {
        return this.penumpang.length;
    }
}

var ank1 = new Angkot('Adit', 'Bandung', ['A', 'g'], [0]);


console.log(this.location);
const url = this.location.href;
console.log(url);

class Bis {
    banyakPenumpang(penumpang) {
        return penumpang.length;
    }
}

let bis = new Bis;

console.log(bis.banyakPenumpang(['A', 'B', 'C']));

let nama = 'Aditya';

console.log(`<form action='' method='post' enctype='multipart/form-data'>
<div class='form-froup'>
    <label>Label : <input class='form-control' type='text' name='izone' id='izone' value="Aditya P"></label>
</div>
<button class='btn btn-primary' type='submit' name='submit'>Submit</button>
<button class='btn btn-danger' type='reset'>Reset</button>
</form>`);

const mhs = [
    {
        nama: 'Aditya',
        umur: 22
    },
    {
        nama: 'Rama',
        umur: 15
    },
    {
        nama: 'Azka',
        umur: 7
    },
    {
        nama: 'Ajmal',
        umur: 4
    },
];


function sanitize(string, ...value) {
    // return DOMPurify.sanitize(...value);
}

const el = `<h3 class="box-title m-b-0">Bordered Table</h3>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th class="text-nowrap">Action</th>
            </tr>
        </thead>
        <tbody>${mhs.map(m => `<tr>
        <td>${m.nama}</td>
        <td>${m.umur}</td>
        <td class="text-nowrap">
            <a href="${url}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
            <a href="adit" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
        </td>
    </tr>`)}
        </tbody>
    </table>
</div>`;

// console.log(sanitize);
// const bodina = document.querySelector('.bodina')
// console.log(bodina);
// console.log(el);

// bodina.innerHTML = el;



// document.body.innerHTML = el;


const sma = {
    id: 123,
    nama: 'Adit',
    umur: [1, 2, 3, 4, 3, 4, 5, 3]
}

function getumur({ nama, umur }) {
    return nama + umur[2];
}

console.log(getumur(sma));

//for of
for (let i = 0; i < mhs.length; i++) {
    console.log(mhs[i]);
}

for (const m of mhs) {
    console.log(m.nama);
}
//sddddddddddddddddddddddddddddddddddddddddddd
// let x = document.querySelector('#judul');
// console.log(x);
// x.style.color = 'red';
// x.style.backgroundColor = 'blue';
// x.classList.add('lass', 'persib');
// x.innerHTML = `<h1>GOBS</h1>`;

// const baru = document.createElement('p');
// const tagbaru = document.createTextNode('Paragraf Baru');
// baru.appendChild(tagbaru);

// const lama = document.querySelector('#judul');
// lama.appendChild(baru);

// lama.before(baru);

//adfds
// const div = document.querySelectorAll('div')
// console.log(document.body);


// const h1warna = document.querySelector('.h1warna');
// h1warna.addEventListener('click', () => {
//     h1warna.style.color = 'red'; document.body.style.backgroundColor
//         = 'red'
// });

//JSON 

//part1 objek jadi json

// let pegawai = [
//     {
//         "id": "111111",
//         "nama": "Aditya Solihin",
//         "jabatan": "kasir",
//         "password": "aditya"
//     },
//     {
//         "id": "222222",
//         "nama": "Pangestu Sholehudin",
//         "jabatan": "pelayan",
//         "password": "pangestu"
//     }
// ];

// console.log(JSON.stringify(pegawai));

//part2 json jadi objek

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let pegawai = JSON.parse(this.responseText);
//         console.log(pegawai);
//     }
// }

// xhr.open('GET', 'JSON/user.json', true);
// xhr.send();

//part 3 dengan jQuery
$.getJSON('JSON/menu.json', (data) => {
    console.log(data);
});

