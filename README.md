<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Thanks again! Now go create something AMAZING! :D
***
***
***
*** To avoid retyping too much info. Do a search and replace for the following:
*** github_username, repo_name, twitter_handle, email, project_title, project_description
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]


<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://github.com/Thynkon/fs-sharing">
    <img src="public/assets/img/logo.png" alt="Logo" width="80" height="80">
  </a>

<h3 align="center">FS sharing</h3>

  <p align="center">
    <br />
    <a href="./doc"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/Thynkon/fs-sharing">View Demo</a>
    ·
    <a href="https://github.com/Thynkon/fs-sharing/issues">Report Bug</a>
    ·
    <a href="https://github.com/Thynkon/fs-sharing/issues">Request Feature</a>
  </p>
</p>



<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary><h2 style="display: inline-block">Table of Contents</h2></summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#hacking-on-the-project">Hacking on the project</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#documentation">Documentation</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

[![Product Name Screen Shot][product-screenshot]](https://example.com)

Here's a blank template to get started:
**To avoid retyping too much info. Do a search and replace with your text editor for the following:**
`github_username`, `repo_name`, `twitter_handle`, `email`, `project_title`, `project_description`


### Built With

* [PHP 8.0](https://www.php.net/releases/8.0/en.php)
* [Mariadb 10.6.4](https://mariadb.com/kb/en/mariadb-1064-release-notes/)
* [Composer 2.1.11](https://getcomposer.org/download/)


<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple steps.

### Prerequisites
#### [Composer](https://getcomposer.org/)
- Archlinux
    ```sh
    sudo pacman -S composer
    ```

- NixOS
    ```sh
    nix-shell shell.nix
    ```

### Installation

1. Clone the repo
   ```sh
   $ git clone https://github.com/Thynkon/fs-sharing.git
   ```
2. Install php packages
   ```sh
   $ cd fs-sharing
   $ composer install
   ```

4. Setup database connection
   This projects uses PDO as the database connector. In order to connect to a database, you must
   set your database credentials in **.env**.
   ```dotenv
    DB_CONNECTION=mongodb
    MONGO_DB_HOST=127.0.0.1
    MONGO_DB_PORT=27017
    MONGO_DB_DATABASE=<DATABASE_NAME>
    MONGO_DB_USERNAME=<USERNAME>
    MONGO_DB_PASSWORD=<PASSWORD>
    DB_AUTHENTICATION_DATABASE=<DATABASE_NAME>
   ```

5. Populate the database
   ```sh
   php artisan migrate:fresh --seed
   ```

<!-- USAGE EXAMPLES -->
## Usage

Use this space to show useful examples of how a project can be used. Additional screenshots, code examples and demos work well in this space. You may also link to more resources.

_For more examples, please refer to the [Documentation](https://example.com)_

## Hacking on the project
### Tests
If you have added a feature and you want to test if everything is ok, you can run the unit tests we wrote
by typing the following:
```sh
$ composer test
```

<!-- ROADMAP -->
## Roadmap

See the [open issues](https://github.com/Thynkon/fs-sharing/issues) for a list of proposed features (and known issues).

## Documentation

<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.



<!-- CONTACT -->
## Contact

Your Name - [@twitter_handle](https://twitter.com/twitter_handle) - email

Project Link: [https://github.com/Thynkon/fs-sharing](https://github.com/Thynkon/fs-sharing)

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/Thynkon/repo.svg?style=for-the-badge
[contributors-url]: https://github.com/Thynkon/fs-sharing/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/Thynkon/repo.svg?style=for-the-badge
[forks-url]: https://github.com/Thynkon/fs-sharing/network/members
[stars-shield]: https://img.shields.io/github/stars/Nomeos/repo.svg?style=for-the-badge
[stars-url]: https://github.com/Thynkon/fs-sharing/stargazers
[issues-shield]: https://img.shields.io/github/issues/Nomeos/repo.svg?style=for-the-badge
[issues-url]: https://github.com/Thynkon/fs-sharing/issues
[license-shield]: https://img.shields.io/github/license/Nomeos/repo.svg?style=for-the-badge
[license-url]: https://github.com/Thynkon/fs-sharing/blob/master/LICENSE
