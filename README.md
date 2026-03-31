🌿 Nonprofit adományozó webalkalmazás

Ez a webalkalmazás egy nonprofit szervezet számára készült, amelynek célja, hogy összekösse az adományozókat és az alapítványokat.

A projekt célja

A rendszer lehetőséget biztosít arra, hogy a felhasználók egyszerűen feltöltsék a feleslegessé vált tárgyaikat (például ruhákat), amelyeket alapítványok igényelhetnek.  
Ezáltal az adományok gyorsan és hatékonyan juthatnak el a rászorulókhoz.

Felhasználói szerepkörök

- **Adományozó**
  - Adományok feltöltése
  - Saját adományok kezelése

- **Alapítvány**
  - Elérhető adományok böngészése
  - Kosárba helyezés és megrendelés

- **Admin**
  - Kiszállítások kezelése
  - Rendelések állapotának módosítása

Fő funkciók

- Regisztráció és bejelentkezés
- Adományok feltöltése képpel
- Kosárkezelés
- Rendelés leadása
- Kiszállítások nyomon követése
- Valós idejű visszajelzések (Snackbar)
- Űrlap validáció és hibakezelés

Felhasznált technológiák

- **Frontend:** Angular, TypeScript, Angular Material, Bootstrap
- **Backend:** Laravel (REST API)
- **Adatbázis:** MySQL

Weblkalmazás indítása:

A webalkalmazás futtatásához először el kell indítani a XAMPP vezérlőpultot, majd el kell indítani az Apache és a MySQL szolgáltatásokat, mivel az adatbázis ezen keresztül működik. Ezt követően a backendet kell elindítani. Ehhez meg kell nyitni a backend mappát a Visual Studio Code-ban, majd a terminálba be kell írni a php artisan migrate --seed parancsot. Ez a parancs létrehozza az adatbázis tábláit, és feltölti azokat a szükséges kezdeti adatokkal. Ezután a php artisan serve parancs kiadásával elindítható a Laravel szerver, amely a backend működését biztosítja.
Ezután a frontend indítása következik. Ehhez egy új Visual Studio Code ablakban meg kell nyitni a frontend mappát. Amennyiben a szükséges csomagok még nincsenek telepítve, a npm install paranccsal telepíthetők. Ezt követően az ng serve -o parancs kiadásával elindítható az Angular alkalmazás, amely automatikusan megnyílik a böngészőben. A frontend és a backend együttes futtatásával a webalkalmazás teljes funkcionalitása elérhetővé válik.

