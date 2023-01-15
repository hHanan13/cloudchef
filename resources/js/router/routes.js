import { h, resolveComponent } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import i18n from "../i18n";
import { useI18n } from "vue-i18n";

import Home from "../views/HomePage.vue";
import Rating from "../views/PerfumeRating.vue";
import Register from "../views/RegisterPage.vue";
import Checkout from "../views/CheckoutPage.vue";
import AccountSetting from "../views/AccountSetting.vue";
import MerchantServices from "../views/MerchantServices.vue";
import Cart from "../views/CartPage.vue";
import PerfumeManufacturing from "../views/PerfumeManufacturing.vue";
import Education from "../views/EducationPage.vue";
import BankAccount from "../views/BankAccounts.vue";

import AccountAddress from "../components/AccountAddress.vue";
import AccountDetails from "../components/AccountDetails.vue";
import AccountOrders from "../components/AccountOrders.vue";
import AccountTickets from "../components/AccountTickets.vue";
import AccountDownloads from "../components/AccountDownloads.vue";
import AccountProducts from "../components/AccountProducts.vue";
import AccountChangePassword from "../components/AccountChangePassword.vue";
import SellersComponent from "../components/Sellers.vue";
import SellerDetails from "../components/SellerDetails.vue";
import DownloadDetails from "../components/DownloadDetails.vue";
import OrderDetails from "../components/OrderDetails.vue";
import PerfumeDetails from "../views/PerfumeDetails.vue";
import WorkshopOffice from "../views/WorkshopOffice.vue";

import Inquiry from "../components/ProductInquiry.vue";
import MoreProducts from "../components/MoreProducts.vue";
import ProductReview from "../components/ProductReview.vue";
import ProductShipping from "../components/ProductShipping.vue";
import SellerProducts from "../components/SellerProducts.vue";
import SellerReviwes from "../components/SellerReviwes.vue";

import Signin from "../components/Forms/Signin.vue";
import Signup from "../components/Forms/Signup.vue";

import Favourites from "../views/Favourites.vue";
import NotesPage from "../views/NotesPage.vue";
import TestPage from "../views/TestPage.vue";
import NoteDetails from "../views/NoteDetails.vue";
import AboutUs from "../views/AboutUs.vue";
import PoliticsTerms from "../views/PolitcsTerms.vue";
import AccountControlPanel from "../components/AccountControlPanel.vue";
import AddOrder from "../components/AddOrder.vue";
import StoreList from "../views/StoresList.vue";
import StoreDetails from "../views/StoreDetails.vue";
import Notification from "../views/Notification.vue";
import Following from "../components/Following.vue";
import Details from "../views/Details.vue"
import PackageDetails from "../views/PackageDetails.vue"

import store from "../store/index";
let lang = store.getters.getLang;
const routes = [
    {
        path: "/",

        /*  redirect: `/${i18n.locale}`, */
        redirect: lang,
    },
    {
        path: `/:${lang}`,
        component: {
            render() {
                return h(resolveComponent("router-view"));
            },
        },
        children: [
            {
                path: "",
                name: "Home",
                component: Home,
                meta: {
                    title: lang === "ar" ? "غالي-الرئيسية" : "Ghali-Home",
                },
            },
            {
                path: "perfume-ratings",
                name: "Perfume Rating",
                component: Rating,
                meta: {
                    title:
                        lang === "ar"
                            ? "غالي- تصنيفات العطور"
                            : "Ghali-Categories",
                },
            },
            {
                path: "details",
                component: Details,
            },
            {
                path: "page/:id",
                component: AboutUs,
            },
            {
                path: "register",
                name: "Register",
                component: Register,
                children: [
                    {
                        path: "",
                        component: Signin,
                        name: "signin",
                        meta: {
                            title:
                                lang === "ar"
                                    ? "غالي- تتسحيل الدخول"
                                    : "Ghali-Signin",
                        },
                    },
                    {
                        path: "signup",
                        component: Signup,
                        name: "signup",
                        meta: {
                            title:
                                lang === "ar"
                                    ? "غالي- تسجيل حساب"
                                    : "Ghali-Signup",
                        },
                    },
                ],
            },
            {
                path:"package/:id",
                component:PackageDetails
            },
            {
                path: "merchant-services",
                name: "Merchant Services",
                component: MerchantServices,
                meta: {
                    title:
                        lang === "ar"
                            ? "غالي- خدمات التجار"
                            : "Ghali-Merchant Services",
                },
            },
            {
                path: "notification",
                name: "Notification",
                component: Notification,
                meta: {
                    title:
                        lang === "ar"
                            ? "غالي-الاشعارات"
                            : "Ghali-Account-Notification",
                },
            },
            {
                path: "account-setting",
                name: "Account Setting",
                component: AccountSetting,
                meta: {
                    title:
                        lang === "ar"
                            ? "غالي-اعدادات الحساب"
                            : "Ghali-Account setting",
                },
                children: [
                    {
                        path: "add-order",
                        component: AddOrder,
                        meta: {
                            title:
                                lang === "ar" ? "غالي-الطلبات" : "Ghali-Orders",
                        },
                    },
                    {
                        path: "details",
                        component: AccountDetails,
                        meta: {
                            title:
                                lang === "ar"
                                    ? "غالي-تفاصيل الحساب"
                                    : "Ghali-Account Details",
                        },
                    },
                    {
                        path: "address",
                        component: AccountAddress,
                        meta: {
                            title:
                                lang === "ar" ? "غالي-العناوين" : "Ghali-Addresses"
                        },
                    },
                    {
                        path: "tickets",
                        component: AccountTickets,
                        meta: {
                    title: lang === "ar" ? "غالي-التذاكر" : "Ghali-Tickets"
                },
                        
                    },
                    {
                        path: "downloads",
                        component: AccountDownloads,
                        meta: {
                    title: lang === "ar" ? "غالي-التنزيلات" : "Ghali-Downloads"
                },
                    },
                    {
                        path: "sellers",
                        component: SellersComponent,
                    },
                    {
                        path: "change-password",
                        component: AccountChangePassword,
                        meta: {
                    title: lang === "ar" ? "غالي-تغيير الباسورد" : "Ghali-Change Password"
                },
                    },
                    {
                        path: "following",
                        name: "Following",
                        component: Following,
                        meta: {
                            title:
                                lang === "ar"
                                    ? "غالي- المتابعين"
                                    : "Ghali-Following"
                        },
                    },
                    {
                        path: "products/:id",
                        name: "Products",
                        component: AccountProducts,
                        meta: {
                            title:
                                lang === "ar"
                                    ? "غالي- المنتجات"
                                    : "Ghali-Products"
                        },
                    },
                    {
                        path: "store-listing",
                        name: "stores",
                        component: StoreList,
                        meta: {
                            title:
                                lang === "ar"
                                    ? "غالي-متاجر"
                                    : "Ghali-Store-listing",
                        },
                    },

                    {
                        path: "control-panel",
                        name: "Control Panel",
                        component: AccountControlPanel,
                        meta: {
                            title:
                                lang === "ar"
                                    ? "غالي- لوحة التحكم"
                                    : "Ghali-Control Panel",
                        },
                    },
                    {
                        path: "orders",
                        component: AccountOrders,
                        /* children: [
                    {
                        path: "order-details",
                        components: OrderDetails,
                    },
                ], */
                    },
                ],
            },
            {
                path: "account-setting/order-details/:id",
                component: OrderDetails,
                name: "order details",
            },
            {
                path: "account-setting/download-details/:id",
                component: DownloadDetails,
                name: "download details",
            },
            {
                path: "account-setting/store-details/:id",
                component: StoreDetails,
                name: "store details",
                children: [
                    {
                        path: "products",
                        component: SellerProducts,
                        name: "seller products",
                    },
                    {
                        path: "reviews",
                        component: SellerReviwes,
                        name: "seller reviews",
                    },
                ],
            },
            {
                path: "account-setting/seller-details/:id",
                component: SellerDetails,
                name: "seller details",
                children: [
                    {
                        path: "products",
                        component: SellerProducts,
                        name: "seller products",
                    },
                    {
                        path: "reviews",
                        component: SellerReviwes,
                        name: "seller reviews",
                    },
                ],
            },
            {
                path: "checkout",
                name: "Checkout",
                component: Checkout,
                meta: {
                    title:
                        lang === "ar" ? "غالي- عملية الدفع" : "Ghali-Checkout",
                },
            },
            {
                path: "policies-terms",
                name: "Policies Terms",
                component: PoliticsTerms,
                meta: {
                    title:
                        lang === "ar"
                            ? "غالي-السياسات والشروط"
                            : "Ghali-Policies Terms",
                },
            },
            {
                path: "about-us",
                name: "About us",
                component: AboutUs,
                meta: {
                    title:
                        lang === "ar" ? "غالي- معلومات عنا" : "Ghali-About Us",
                },
            },

            {
                path: "favourites",
                name: "Favourites",
                component: Favourites,
                meta: {
                    title: lang === "ar" ? "غالي- المفضلة" : "Ghali-Favourites",
                },
            },
            {
                path: "cart",
                name: "cart",
                component: Cart,
                meta: {
                    title: lang === "ar" ? "غالي- حقيبة الشراء" : "Ghali-Cart",
                },
            },
            {
                path: "perfume-manufacturing",
                name: "Perfume Manufacturing",
                component: PerfumeManufacturing,
                meta: {
                    title:
                        lang === "ar"
                            ? "غالي- صناعة العطور"
                            : "Ghali- Manufacturing",
                },
            },
            {
                path: "education",
                name: "Education",
                component: Education,
                meta: {
                    title: lang === "ar" ? "غالي- التعليم" : "Ghali-Education",
                },
            },
            {
                path: "bank-accounts",
                name: "Bank Account",
                component: BankAccount,
                meta: {
                    title:
                        lang === "ar"
                            ? "غالي- حسابات البنوك"
                            : "Ghali-Bank accounts",
                },
            },
            {
                path: "perfume-details/:id",
                name: "Perfume Details",
                component: PerfumeDetails,
                props: true,
                meta: {
                    title:
                        lang === "ar"
                            ? ` ${store.getters.getPname}-غالي `
                            : `Ghali -${store.getters.getPname} `,
                },
                children: [
                    {
                        path: "inquiry",
                        component: Inquiry,
                        name: "ProductproductInquiry",
                    },
                    {
                        path: "more-products",
                        component: MoreProducts,
                        name: "ProductmoreProducts",
                        /* props:true, */
                        props: (route) => ({
                            ...route.params,
                        }),
                    },
                    {
                        path: "product-review",
                        component: ProductReview,
                        name: "Productreviews",
                    },
                    {
                        path: "product-shipping",
                        component: ProductShipping,
                        name: "shipping",
                    },
                ],
            },
            /*  {
                path: "workshop-office",
                name: "Workshop Office",
                component: WorkshopOffice,
            }, */
            {
                path: "notes",
                name: "notes",
                component: NotesPage,
                meta: {
                    title: lang === "ar" ? "غالي- نوتات عطرية" : "Ghali-Notes",
                },
            },
            {
                path: "package",
                name: "package",
                component: TestPage,
                meta: {
                    title:
                        lang === "ar" ? "غالي-باقات التجار" : "Ghali-Packages",
                },
            },
            {
                path: "note/:id",
                name: "noteDetails",
                component: NoteDetails,
                meta: {
                    title:
                        lang === "ar"
                            ? ` ${store.getters.getNname}-غالي `
                            : `Ghali -${store.getters.getNname} `,
                },
                children: [
                    {
                        path: "inquiry",
                        component: Inquiry,
                        name: "NoteproductInquiry",
                    },
                    {
                        path: "more-products",
                        component: MoreProducts,
                        name: "NotemoreProducts",
                        props: true,
                        props: (route) => ({
                            ...route.params,
                        }),
                    },
                    {
                        path: "product-review",
                        component: ProductReview,
                        name: "Notereviews",
                    },
                    {
                        path: "product-shipping",
                        component: ProductShipping,
                        name: "shipping",
                    },
                ],
            },
        ],
    },
]; 

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
    scrollBehavior() {
        document.getElementById("app").scrollIntoView({ behavior: "smooth" });
    },
    linkActiveClass:"active",
    linkExactActiveClass: "exact-active",
});
router.beforeEach((to, _, next) => {
    document.title = `${to.meta.title}`;
    next();
});
export default router;
