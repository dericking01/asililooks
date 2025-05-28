# 💇‍♀️ Asili Looks - Beauty & Hair Care eCommerce Platform

**Asili Looks** is a modern, elegant, and locally-rooted beauty eCommerce platform tailored for Tanzanian and international customers. This platform blends exceptional design, advanced Laravel & Botble CMS backend, and rich content through custom shortcodes to deliver a seamless user experience.

---

## 🚀 Features

### 🛍️ E-Commerce Excellence
- Built on **Botble CMS** with Laravel
- Product catalog with variations (e.g. hair styles, treatments)
- Secure checkout & payment gateways
- Multi-region delivery support (Tanzania + international)

### 🌟 Stunning Custom UI Components
- **Services Carousel** – auto-scroll, hover zoom, arrow navigation
- **Team Section** – vibrant team intro section with a personalized image
- **About Us Section** – rich text & values highlighting the brand story

### 🧩 Custom Shortcodes
Easily embed dynamic content into any page using shortcodes:
| Shortcode       | Purpose                      |
|-----------------|------------------------------|
| `[asili-services]` | Interactive horizontal scroll of services |
| `[asili-about]`    | Brand's mission, offer, and philosophy |
| `[asili-team]`     | Meet-the-team image section |

---

## 📂 Folder Structure


---

## ⚙️ Tech Stack

- **Backend**: Laravel (Botble CMS)
- **Frontend**: HTML, Blade, JavaScript
- **Assets**: Custom CSS, Carousel logic, Mobile responsiveness
- **Server**: Ubuntu 20+, Nginx/Apache, MySQL/MariaDB

---

## 🎯 Setup Instructions

1. **Clone the Repo**  
   ```bash
   git clone https://github.com/dericking01/asililooks.git
   cd asili-looks
   composer install
   npm install && npm run dev
   php artisan migrate --seed
   php artisan serve
