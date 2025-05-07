# 📰 Laravel Medium Clone

Un projet clone de Medium, développé avec Laravel.  
Les utilisateurs peuvent publier des articles, ajouter des images, et interagir.

---

## 🚀 Fonctions principales

- Authentification (inscription, connexion)
- Création, édition, suppression d’articles
- Upload d’images avec **Spatie Media Library**
- Affichage des articles avec pagination
- Like / Follow entre utilisateurs (facultatif)

---

## ⚙️ Installation

1. **Cloner le projet**
```bash
git clone https://github.com/MostafaZrour/Laravel-Medium-Clone.git
cd Laravel-Medium-Clone
```

2. **Installer les dépendances**
```bash
composer install
npm install && npm run dev
```

3. **Configurer l’environnement**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configurer la base de données**
- Modifier `.env` :
```dotenv
DB_DATABASE=medium_clone
DB_USERNAME=root
DB_PASSWORD=
```

5. **Lancer les migrations**
```bash
php artisan migrate
```

6. **Créer le lien de stockage**
```bash
php artisan storage:link
```

---

## 📦 Packages utilisés

- Laravel Breeze (auth)
- Spatie Media Library (upload d’images)
- Laravel Pagination
- Tailwind

---

## 🖼️ Gestion des images

Les images sont gérées avec [Spatie Media Library](https://spatie.be/docs/laravel-medialibrary).  
Elles sont stockées dans `storage/app/public` et accessibles via `/storage`.

---

## 📸 Exemple d'ajout d'image

```php
$post->addMedia($request->file('image'))
     ->toMediaCollection();
```

---

## 📄 Licence

Ce projet est open source. Tu peux l’utiliser, le modifier et le partager librement.
