# Proyek3-SIBOLA-
![ic_launcher](https://github.com/hhanny/Proyek3_Mobile/blob/main/SIBOLA/assets/images/sibola.png)


<ol>
  <li>Dart Dasar(SRP)</li>
  <li>PBO dart</li>
  <li>UML class Diagram</li>
  <li>SOLID principles</li>
  <li>UI flutter</li>
  <li>API</li>
  <li>CRUD Flutter</li>
  <li>Shared Preferences</li>
  <li>firebase</li>
</ol>
<br>

## API
link github di bawah berisikan API
<br>
https://github.com/Adria-Tisnawati-Aprilia/API_Flutter.git


<br>






## UI Flutter
<b>berikut ini tampilan atau UI dari aplikasi yang sudah kami buat</b>
<br>
<img src="https://github.com/hhanny/Proyek3_Mobile/blob/main/SIBOLA/assets/images/bg.jpeg" height="300" width="150">
<img src="https://github.com/Adria-Tisnawati-Aprilia/Matkul-PPB/blob/master/PICT/splash%20screen.jpeg" height="300" width="150">
<img src="https://github.com/Adria-Tisnawati-Aprilia/Matkul-PPB/blob/master/PICT/halaman%20penyambut.jpeg" height="300" width="150">
<img src="https://github.com/Adria-Tisnawati-Aprilia/Matkul-PPB/blob/master/PICT/halaman%20daftar.jpeg" height="300" width="150">
<img src="https://github.com/Adria-Tisnawati-Aprilia/Matkul-PPB/blob/master/PICT/halaman%20masuk.jpeg" height="300" width="150">
<br>


## UML Class Diagram 

<b>berikut adalah Class Diagram yang sudah kami buat</b>
<br>
<img src="https://github.com/Adria-Tisnawati-Aprilia/Matkul-PPB/blob/master/PICT/Class%20Diagram.png" >
<br>
## CRUD
<b>Login</b><br>
https://github.com/hhanny/Proyek3_Mobile/blob/main/SIBOLA/lib/screens/signin_screen.dart
<br>
<b>Register</b><br>
https://github.com/hhanny/Proyek3_Mobile/blob/main/SIBOLA/lib/screens/signup_screen.dart
<br>
<b>Profile</b>
<br>
https://github.com/hhanny/Proyek3_Mobile/blob/main/SIBOLA/lib/screens/profile_screen.dart
<br>
<b>Produk</b><br>
https://github.com/hhanny/Proyek3_Mobile/blob/main/SIBOLA/lib/screens/home_screen.dart
<br>
<b>Booking</b><br>
https://github.com/hhanny/Proyek3_Mobile/blob/main/SIBOLA/lib/screens/booking_screen.dart
<br>

## SOLID
### Single Responsibility Principle(SRP)
<b>berikut adalah diagram <b>Single Responsibility Principle (SRP)</b> yang dimana Setiap class tidak boleh memiliki lebih dari satu tanggung jawab, hanya satu tanggung jawab</b><br>
### penjelasan
class diagram di bawah merupakan contoh dari SRP yang dimana ProfielMenu hanya bertugas untuk membuat menu utama yang terdapat di halaman utama, Booking bertugas untuk mengatur jalannya user menyewa lapangan, lalu frofilepic bertugas untuk mengatur tampilan info data diri yang berada di profile, body bertugas untuk mengatur kerangka profile. 
<br> dari penjelasan di atas, setiap kelas memiliki tanggung jawab pada masing masing tugasnya sesuai penamaannya, dan hanya memiliki satu tanggung jawab yang lebih spesifik.
<br>
![solid-profile](https://github.com/Adria-Tisnawati-Aprilia/Matkul-PPB/blob/master/PICT/SRP.png)
<br>
kode program = https://github.com/hhanny/Proyek3_Mobile/blob/main/SIBOLA/lib/screens/signin_screen.dart
## Shared Preferences
### penjelasan
pertama di sini ada <b>login</b>, pada aplikasi ini di saat login akan menyimpan data <i>shared preference</i> yang dimana ia akan menyimpan token dari user yang sudah login ataupun mendaftar.
ketika user menutup jendela aplikasi user tidak akan berada di halaman login lagi, pada saat user membuka kembali aplikasi maka user akan diarahkan dari tampilan <b>splash</b> setelah itu ke tampilan home. untuk kembali ke tampilan awal maka user perlu <i>logout</i> terlebih dahulu di halaman <b>profile<b>
  <br>
<b>Login</b><br>
https://github.com/hhanny/Proyek3_Mobile/blob/main/SIBOLA/lib/screens/signin_screen.dart
<br>
<b>Profile</b><br>
https://github.com/hhanny/Proyek3_Mobile/blob/main/SIBOLA/lib/screens/profile_screen.dart
<br>
<b>Splash</b><br>
https://github.com/hhanny/Proyek3_Mobile/blob/main/SIBOLA/lib/screens/welcome_desc.dart
<br>

## FIREBASE NOTIFICATION
<img src="https://github.com/Adria-Tisnawati-Aprilia/Matkul-PPB/blob/master/PICT/firebase.jpg" height="400" width="200">
<b>Firebase notification</b><br>
https://github.com/Adria-Tisnawati-Aprilia/Matkul-PPB/tree/master/PRAKTIKUM14/Notification
<br>
