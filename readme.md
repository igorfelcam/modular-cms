# Modular CMS

## About Modular CMS

For you who develop websites and need to implement a development standard for your projects, but don't have much time for that, I present Modular CMS!
I needed to keep a standard for my site designs, so with Laravel, I created this module-based CMS to be simple and straightforward, you can split your site design by scaling it into "page", "module" and "component".

## What's each split

### Page
Is basically the page itself of your site, if your site is a page you will only have one page registered in the "page" part, for example.

### Module
"Module" is referred to here as parts that make up a website page, such as header, section, footer, etc.
By default, in the project, the following modules are configured: header, menu, banner, section, gallery, form, and footer.
But that does not mean that you will need to use the same module settings, as it is just a recommendation. Change the way it fits your project.

### Component
Finally, the "component" is what is in the modules. To keep the default, is recommended this item  to be just a combination of image, text, link and component order in the module. Organize the best way for you.

## How is organized in DB
See how the content control ER of this project is organized, simple, no?

<img src="https://res.cloudinary.com/igorfelcam/image/upload/v1570120015/modular-cms/modular-cms-er_nesvs4.png" width="400">

## Front-end of CMS
We're working in it... in progress... wait one moment, pleeeeease!

## Front-end of your website
So, you're free for make how you wish!

The goal here is to help standardize the management part of a website ... now, the front end is up to you, you are able to.
Of course, we recommend using Vue.js as it is integrated with Laravel or viewed with the blade ... but that's your choice. If you don't use any of these features built into Laravel, just tailor the project to json endpoints maybe. Diy.

## Help me
- [Laravel](https://laravel.com/docs)
- [Vue.js](https://vuejs.org/v2/guide/)

## License
The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
