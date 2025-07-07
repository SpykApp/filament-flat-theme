![Screenshot](https://banners.beyondco.de/Filament%20Flat%20Theme.png?theme=light&packageManager=composer+require&packageName=spykapp%2Ffilament-flat-theme&pattern=architect&style=style_1&description=A+simple+theme+for+FilamentPHP+based+on+a+Flat+design.&md=1&showWatermark=0&fontSize=100px&images=color-swatch)

# Filament Flat Theme

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spykapp/filament-flat-theme.svg?style=flat-square)](https://packagist.org/packages/spykapp/filament-flat-theme)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/spykapp/filament-flat-theme/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/spykapp/filament-flat-theme/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/spykapp/filament-flat-theme/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/spykapp/filament-flat-theme/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/spykapp/filament-flat-theme.svg?style=flat-square)](https://packagist.org/packages/spykapp/filament-flat-theme)

A simple theme for FilamentPHP with custom user menu in sidebar

> ⚠️ **Note:** Filament Flat Theme is supported only on **Filament V3** currently.


## Screenshots

#### Dashboard

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Dashboard Light</th>
      <th scope="col" width="1000px">Dashboard Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <a href="https://ibb.co/Y4JL2Qh9" target="_blank">
            <img src="https://i.ibb.co/DPmR4WQX/dashboard-l.png" width="100%" alt="Dashboard Light" />
        </a>
      </td>
      <td>
        <a href="https://ibb.co/x88nmjsT" target="_blank">
            <img src="https://i.ibb.co/QjjW8Ncw/dashboard-d.png" width="100%" alt="Dashboard Dark" />
        </a>
      </td>
    </tr>
  </tbody>
</table>

#### Table

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Customers Light</th>
      <th scope="col" width="1000px">Customers Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <a href="https://ibb.co/3y8KxrZv" target="_blank">
          <img src="https://i.ibb.co/qM46HyQC/customers-l.png" width="100%" alt="Customers Light" />
        </a>
      </td>
      <td>
        <a href="https://ibb.co/LXWSBZcc" target="_blank">
          <img src="https://i.ibb.co/7d5vB1ZZ/customers-d.png" width="100%" alt="Customers Dark" />
        </a>
      </td>
    </tr>
  </tbody>
</table>

#### Form

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Form Light</th>
      <th scope="col" width="1000px">Form Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <a href="https://ibb.co/wNvDHvrQ" target="_blank">
          <img src="https://i.ibb.co/FbPGvPqY/form-l.png" width="100%" alt="Form Light" />
        </a>
      </td>
      <td>
        <a href="https://ibb.co/hJDTrn4N" target="_blank">
          <img src="https://i.ibb.co/KpF8BQfg/form-d.png" width="100%" alt="Form Dark" />
        </a>
      </td>
    </tr>
  </tbody>
</table>

#### Widget & Table

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Orders Light</th>
      <th scope="col" width="1000px">Orders Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <a href="https://ibb.co/sYNTbnt" target="_blank">
          <img src="https://i.ibb.co/ZDFQG5N/orders-l.png" width="100%" alt="Orders Light" />
        </a>
      </td>
      <td>
        <a href="https://ibb.co/hFKm9z7y" target="_blank">
          <img src="https://i.ibb.co/Wvc25Jx6/orders-d.png" width="100%" alt="Orders Dark" />
        </a>
      </td>
    </tr>
  </tbody>
</table>

#### Cluster (Sidebar)

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Products Light</th>
      <th scope="col" width="1000px">Products Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <a href="https://ibb.co/Rpc3Pwvr">
          <img src="https://i.ibb.co/4Zp8Mrmv/products-l.png" width="100%" alt="Products Light" />
        </a>
      </td>
      <td>
        <a href="https://ibb.co/3YRq0Xkp">
          <img src="https://i.ibb.co/x8F0Mv31/products-d.png" width="100%" alt="Products Dark" />
        </a>
      </td>
    </tr>
  </tbody>
</table>


## Installation

```bash
composer require spykapp/filament-flat-theme
```
After installing the package, you’ll need to set up a custom Filament theme (if you haven’t already). Follow the official guide here:

📘 **Creating a Custom Theme**  
https://filamentphp.com/docs/3.x/panels/themes#creating-a-custom-theme

---

### Once your custom theme is set up:

1. Open your `theme.css` file.
2. Replace this line:

    ```css
    @import '/vendor/filament/filament/resources/css/theme.css';
    ```

   with:

    ```css
    @import '/vendor/spykapp/filament-flat-theme/resources/css/theme.css';
    ```

3. Then run the build process:

    ```bash
    npm run build
    ```

---

✅ That’s it, you’re now using the **Filament Flat Theme**.

