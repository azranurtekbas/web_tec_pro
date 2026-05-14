<div align="center">

# 🌐 Web Technologies Project
### Azra Nur Tekbaş — Sakarya Üniversitesi Bilgisayar Mühendisliği

</div>

---

## 📋 İçindekiler

- [Proje Hakkında](#-proje-hakkında)
- [Canlı Sayfalar](#-canlı-sayfalar)
- [Kullanılan Teknolojiler](#-kullanılan-teknolojiler)
- [Proje Yapısı](#-proje-yapısı)
- [Sayfa Açıklamaları](#-sayfa-açıklamaları)
- [API Entegrasyonları](#-api-entegrasyonları)
- [Form Doğrulama Sistemi](#-form-doğrulama-sistemi)
- [Login Sistemi](#-login-sistemi)
- [Kurulum](#-kurulum)

---

## 📌 Proje Hakkında

Bu proje, Sakarya Üniversitesi Web Teknolojileri dersi kapsamında geliştirilmiş, **kişisel tanıtım ve teknik beceri sergisi** amacı taşıyan çok sayfalı bir web uygulamasıdır. Hazır tema kullanılmadan Bootstrap ile responsive tasarım uygulanmış; HTML5 semantik yapısı, JavaScript (Native + Vue.js), PHP ve harici API entegrasyonları içermektedir.

---

## 🖥 Canlı Sayfalar

| Sayfa | Dosya | Açıklama |
|---|---|---|
| Hakkında | `index.html` | Giriş & kişisel tanıtım |
| Özgeçmiş | `cv.html` | CV & eğitim bilgileri |
| Şehrim | `city.html` | Karaman tanıtımı & slider |
| Takımım | `team.html` | Karaman FK |
| İlgi Alanlarım | `myinterests.html` | NASA & oyun API'leri |
| İletişim | `contact.html` | Çift doğrulamalı form |
| Login | `login.php` | Güvenli giriş sayfası |

---

## 🛠 Kullanılan Teknolojiler

### Frontend
| Teknoloji | Sürüm | Kullanım Amacı |
|---|---|---|
| HTML5 | — | Semantic yapı (`header`, `section`, `article`, `main`, `nav`, `footer`) |
| CSS3 | — | Harici dosya mimarisi, animasyonlar |
| Bootstrap | 5.3.0-alpha3 | Responsive grid, carousel bileşeni |
| JavaScript | ES6+ | Native form doğrulama, API çağrıları, DOM manipülasyonu |
| Vue.js | 3 (CDN) | İletişim formu için reaktif ikinci doğrulama butonu |
| Font Awesome | 6.4.0 | İkon seti |
| Google Fonts | — | Rubik, Sigmar fontları |

### Backend
| Teknoloji | Kullanım Amacı |
|---|---|
| PHP | Form verisi sunucu tarafında işleme, login doğrulama, session yönetimi |

### Harici API'ler
| API | Sağlayıcı | Kullanım |
|---|---|---|
| APOD (Astronomy Picture of the Day) | NASA | Günün astronomi fotoğrafı ve açıklaması |
| Free Epic Games | RapidAPI | Ücretsiz Epic Games oyunları |

---

## 📁 Proje Yapısı

```
web_tec_project/
│
├── index.html              # Hakkında (giriş) sayfası
├── cv.html                 # Özgeçmiş sayfası
├── city.html               # Şehrim sayfası (Karaman)
├── team.html               # Takımım sayfası (Karaman FK)
├── myinterests.html        # İlgi alanlarım + API sayfası
├── contact.html            # İletişim formu
├── contactdetails.html     # Form özeti (client-side)
├── login.php               # Login sayfası
├── postLogin.php           # Login doğrulama (PHP)
├── contact_submit.php      # Form verisi işleme (PHP)
├── userdata.php            # Kullanıcı kimlik bilgileri
│
├── css/
│   ├── main.css            # Ana CSS (tüm partial dosyaları import eder)
│   ├── base.css            # Reset, genel stiller, responsive breakpoint'ler
│   ├── layout/
│   │   ├── header.css
│   │   ├── nav.css
│   │   └── footer.css
│   └── pages/
│       ├── about.css
│       ├── cv.css
│       ├── city.css
│       ├── team.css
│       ├── myinteretss.css
│       ├── contact.css
│       ├── contactdetails.css
│       └── login.css
│
├── js/
│   ├── contact.js          # Native JS form doğrulama & gönderim
│   ├── contactdetails.js   # localStorage'dan form verisi okuma
│   ├── login.js            # Login JS doğrulama
│   ├── nasa-api.js         # NASA APOD API entegrasyonu
│   ├── freegames-api.js    # Epic Games API entegrasyonu
│   ├── carosuel.js         # Slider yardımcı fonksiyonları
│   └── praticles.js        # Canvas parçacık animasyonu
│
└── img/                    # Tüm görsel dosyalar
```

---

## 📄 Sayfa Açıklamaları

### 🏠 Hakkında — `index.html`
Sayfa sahibini tanıtan giriş sayfasıdır. Canvas tabanlı parçacık animasyonu, hobi ve ilgi alanı kartları, iletişim ve giriş bağlantıları içerir.

### 📄 Özgeçmiş — `cv.html`
HTML5 semantik etiketleri (`header`, `section`, `article`, `main`, `address`) ile yapılandırılmış CV sayfasıdır. Beceriler, diller, iletişim bilgileri ve eğitim geçmişini içerir.

### 🏙 Şehrim — `city.html`
Karaman ili tanıtım sayfasıdır. Şehrin etimolojisi, tarihçesi ve nüfus bilgilerini içerir. Dört resimden oluşan tıklanabilir Bootstrap carousel (slider) ile her resim ilgili bölüme bağlıdır.

### ⚽ Takımım — `team.html`
Karaman Futbol Kulübü tanıtım sayfasıdır. Kulüp bilgileri, sosyal medya bağlantıları ve en değerli sekiz oyuncunun istatistikleri yer almaktadır.

### 🎮 İlgi Alanlarım — `myinterests.html`
İki farklı harici API'den veri çekilerek gösterildiği sayfadır. Oyun ve uzay/astronomi ilgi alanları NASA ve Epic Games API'leri ile zenginleştirilmiştir.

### 📬 İletişim — `contact.html`
Tüm form elemanlarını (text, email, tel, select, radio, checkbox, textarea) barındıran iletişim sayfasıdır. İki farklı buton ile iki farklı doğrulama motoru çalışır. Form verileri PHP ile sunucu tarafında işlenir.

### 🔐 Login — `login.php` + `postLogin.php`
JavaScript ile istemci tarafı boş alan ve e-posta format doğrulaması yapıldıktan sonra veriler PHP'ye POST edilir. Doğrulama başarılıysa öğrenci numarasıyla karşılama, başarısızsa login sayfasına yönlendirme gerçekleşir.

---

## 🔌 API Entegrasyonları

### NASA APOD API
```
Endpoint : https://api.nasa.gov/planetary/apod
Yöntem   : GET
Gösterilen: Başlık, açıklama, görsel, tarih, telif hakkı
Dosya    : js/nasa-api.js
```

### Free Epic Games API (RapidAPI)
```
Host    : free-epic-games.p.rapidapi.com
Endpoint: /free
Yöntem  : GET
Gösterilen: Oyun adı, açıklama, görsel, tarih
Dosya   : js/freegames-api.js
```

> ⚠️ Döviz ve hava durumu API'leri proje gereksinimi gereği kullanılmamıştır.

---

## ✅ Form Doğrulama Sistemi

İletişim formu iki bağımsız doğrulama motoruyla çalışır:

### Buton 1 — "JS ile Gönder" (Native JavaScript)
`js/contact.js` dosyasında tanımlı doğrulama fonksiyonları devreye girer.

| Alan | Kontrol |
|---|---|
| İsim / Soyisim | Boş bırakılamaz |
| E-posta | Boş bırakılamaz + `@` ve alan formatı kontrolü |
| Telefon | Boş bırakılamaz + yalnızca rakam kontrolü (`/^\d+$/`) |
| Yaş | Seçim yapılması zorunlu |
| Cinsiyet | En az bir seçenek işaretlenmeli |
| Mesaj | Boş bırakılamaz |

Tüm alanlar geçerliyse form `contact_submit.php`'ye POST edilir.

### Buton 2 — "Vue.js ile Gönder" (Vue 3)
`contact.html` içinde Vue 3 CDN ile mount edilen küçük bir Vue uygulamasıdır. Aynı doğrulama kurallarını reaktif olarak uygular; hatalar `v-for` ile liste halinde gösterilir.

### Sunucu Tarafı — `contact_submit.php`
Gönderilen tüm veriler `htmlspecialchars()` ile güvenli biçimde işlenir ve tablo formatında ekrana yazdırılır.

---

## 🔐 Login Sistemi

```
Kullanıcı Adı : g221210056@sakarya.edu.tr
Şifre         : g221210056
```

**İstemci Tarafı (JavaScript):**
- Boş alan kontrolü
- E-posta format doğrulaması (`/^[^\s@]+@[^\s@]+\.[^\s@]+$/`)
- Hata mesajı form içinde dinamik olarak gösterilir

**Sunucu Tarafı (PHP):**
- Veriler `postLogin.php`'ye POST edilir
- `session_start()` ile oturum başlatılır
- Başarılı giriş → `"Hoşgeldiniz [Öğrenci No]"` mesajı, 3 sn sonra anasayfaya yönlendirme
- Başarısız giriş → Hata mesajı, 3 sn sonra login sayfasına yönlendirme

---

## ⚙️ Kurulum

Bu proje sunucu tarafında PHP çalıştırdığı için yerel bir PHP sunucusuna ihtiyaç duyar.

### 1. Gereksinimler
- PHP 7.4+
- Yerel sunucu: [XAMPP](https://www.apachefriends.org/) / [WAMP](https://www.wampserver.com/) / [Laragon](https://laragon.org/)

### 2. Kurulum Adımları

```bash
# Projeyi klonlayın
git clone https://github.com/azranurtekbas/web_tec_pro.git

# Proje klasörünü sunucunun web dizinine taşıyın
# XAMPP için: C:/xampp/htdocs/web_tec_project/
# Laragon için: C:/laragon/www/web_tec_project/
```

### 3. Çalıştırma

```
XAMPP/WAMP başlatın → Apache servisini aktif edin
Tarayıcıda açın: http://localhost/web_tec_project/
```

> ℹ️ Yalnızca HTML/CSS/JS sayfaları için herhangi bir sunucu olmadan doğrudan tarayıcıda açılabilir. PHP sayfaları (`login.php`, `postLogin.php`, `contact_submit.php`) için sunucu şarttır.

---

## 👩‍💻 Geliştirici

**Azra Nur Tekbaş**  
Sakarya Üniversitesi — Bilgisayar Mühendisliği 4. Sınıf  
📧 azranurtekbas@gmail.com

---

<div align="center">
  <sub>Sakarya Üniversitesi Web Teknolojileri Projesi — 2025</sub>
</div>
