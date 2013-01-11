#Grenoble Tech List

Map with startups, investors, incubators and all digital actors. Inspired by [Paris Tech List](http://paristechlist.com/all) and developed by [Jonathan Bonzy](https://twitter.com/jonathanbonzy) and [Pierre Felgines](https://twitter.com/PierreFelgines) in Grenoble.

## Quick start

- Download lastest version or clone this repo
- Check that your PHP version is at least 5.3.3
- Install composer wih `curl -s http://getcomposer.org/installer | php`
- Install project needed packages with `php composer.phar install`
- Configure your Apache virtualhost

## Launch a Tech List for your city

Current version use JSON objects stored in `src/app.php` file so you mainly just need update them and "search/replace" Grenoble with yout city name in `web/index.html`

#### web/index.html ####

- Update title tag `<title>Grenoble Tech List</title>`
- Update h1 tag `<h1 class="pull-left">Grenoble Tech List</h1>`
- Update Google Maps API key
- Create a Google Form for "add organization" and update button url
- Update `TechList.City` variable with your city name, latitude and longitude
- Create a Google Analytics Tracker and update tracker id

#### src/app.php ####

- Update data for each routes: `/api/{city}/startups`, ...

## Contact

### Twitter

- [Jonathan Bonzy](https://twitter.com/jonathanbonzy)
- [Pierre Felgines](https://twitter.com/Pierre.Felgines)
- [@GreTechList](https://twitter.com/GreTechList)

### Mail

grenoble-tech-list@googlegroups.com
