import "bootstrap/dist/css/bootstrap.css"
import { createApp} from 'vue'
import App from './App.vue'
import store from "./store"

import Notifications from '@kyvg/vue3-notification'
import "bootstrap/dist/js/bootstrap.js"

import "aos/dist/aos.css";


import router from "./router/routes"


/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'
/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
/* import { BootstrapVue } from 'bootstrap-vue'
 *//* import specific icons */
import {
  faCartShopping,
  faEyeSlash,
  faEye,
    faBriefcase,
    faEnvelope,
    faBottleDroplet,
    faPenToSquare,
    faTrashAlt,
    faLocationDot,
    faAngleDoubleRight,
    faSignOutAlt,
    faUser,
    faLock,
    faAt,
    faDownload,
    faTicketAlt,
    faTachometerAlt,
    faUserFriends,
    faStore,
    faMapMarkerAlt,
    faLink,
    faPhone,
    faShoppingCart,
    faInfoCircle,
    faSearch,
    faShareNodes,
    faHeart,
    faCloudArrowUp,
    faComments,
    faVolumeHigh,
    faBell
    /* faVolume */
} from "@fortawesome/free-solid-svg-icons";

import i18n from './i18n'
/* add icons to the library */
library.add(
    faCartShopping,
    faEyeSlash,
    faEye,
    faEnvelope,
    faBell,
    faLocationDot,
    faVolumeHigh,
    faComments,
    faCloudArrowUp,
    faBriefcase,
    faBottleDroplet,
    faPenToSquare,
    faTrashAlt,
    faHeart,
    faShareNodes,
    faSearch,
    faInfoCircle,
    faUser,
    faLock,
    faAt,
    faUserFriends,
    faMapMarkerAlt,
    faDownload,
    faTicketAlt,
    faTachometerAlt,
    faStore,
    faLink,
    faPhone,
    faShoppingCart,
    faSignOutAlt,
    faAngleDoubleRight
);

// use beforeEach route guard to set the language
router.beforeEach((to, from, next) => {

  // use the language from the routing param or default language
  let language = to.params.lang;
  if (!language) {
    language = 'ar'
  }

  // set the current language for i18n.
  i18n.locale = language
  next()

})


createApp(App).use(i18n).use(router).use(store).use(Notifications).component('font-awesome-icon', FontAwesomeIcon).mount("#app");


