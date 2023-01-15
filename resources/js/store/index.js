import {createStore} from "vuex"
import createPersistedState from 'vuex-persistedstate'


export default createStore({

    plugins: [createPersistedState({
        storage: window.sessionStorage,
    })],
    state: {
        cart: [],details:{},discount:0,sellerDetails:{},accountType:'',sharedID:'',
        lang:'ar',token:'', favourites:[] ,search:'',p:'',n:'',loaded:false,productType:'',
        overlay:false, userId:''
    },
    getters: {
        getUserId: (state)=>{
            return state.userId
        },
        getOverlay: (state)=>{
            return state.overlay;
        },
        getProductType: (state)=>{
            return state.productType
        },
        getSharedID: (state)=>{
            return state.sharedID
        },
        getPname: (state)=>{
            return state.p
        },
        getLoaded:(state)=>{
            return state.loaded
        },
        getNname: (state)=>{
            return state.n
        },
        cartItems: (state) => {
            return state.cart;
        },
        getDetails: (state) => {
            return state.details
        },
        getDiscount: (state) => {
            return state.discount
        },
        getSellerDetails: (state)=>{
            return state.sellerDetails
        },
        getLang: (state) => {
            return state.lang
        },
        getToken: (state) => {
            return state.token
        },
        getFavourites: (state)=>{
            return state.favourites
        },
        getSearch: (state)=>{
            return state.search
        },
        getAccountType:(state)=>{
            return state.accountType
        }
    },
    mutations: {
        setUserId(state,id){
            state.userId =id
        },
        clearUserId(state,value){
            state.userId =value
        },
        setOverlay(state,status){
            state.overlay = status
        },
        addProductType(state,type){
            state.productType = type
        },
        addSharedID(state,id){
            state.sharedID = id
        },
        addAccountType(state,type){
            state.accountType = type
        },
        clearAccountType(state){
            state.accountType=''
        },
        clearCart(state){
            state.cart=[]
        },
        seLoaded(state,status){
            state.loaded = status
        },
        addP(state,name){
            state.p = name
        },
        addN(state,name){
            state.n = name
        },
        addToCart (state, payload) {
            const {product,quantity}= payload
           
            let item = Object.keys(product).find(l => l==="name_ar")

            if(item){
               
                let nela = state.cart.find(i=>
                    Object.keys(i).find(l => l==="name_ar") && i.id === product.id )
                if(nela) {
                    nela.quantity++
                    nela.total = nela.quantity * nela.price
                } 
                else {
                    state.cart=[...state.cart,{...product,quantity:quantity || 1,total:product.price} ]
                }

            }
            else{
                let khara = state.cart.find(i=>
                    Object.keys(i).find(l => l==="perfume_name_ar") && i.id === product.id )
                if (khara) {
                    khara.quantity++
                    khara.total = khara.quantity * khara.price
                } else {
                    console.log(quantity)
                    state.cart=[...state.cart,{...product,quantity:quantity || 1,total:product.price} ]
                }

            }
            

           
        },
        removeFromCart(state,product){
            state.cart = state.cart.filter(i => i !== product)
        },
        increaseQuantity(state,item){
           let product = state.cart.find(i => i === item )
           product.quantity++
           product.total =product.quantity * product.price
        },
        decreaseQuantity(state,item){
            let product = state.cart.find(i => i === item)
            product.quantity--
            product.total = product.quantity * product.price;

        },
        addProductDetails(state,payload){
            state.details = payload
        },
        addDiscount(state,discount){
            state.discount = discount
        },
        addSellerDetails(state,payload){
            state.sellerDetails=payload
        },
        addLang(state,payload){
            state.lang=payload

        },
        addToken(state,payload){
            state.token=payload
        },
        addToFavourite(state,product){
            let item = state.favourites.find( i => i.id === product.id) 
            console.log(item)
            if(item){
                state.favourites = state.favourites.filter(i => i.id !== item.id)
                console.log(item)
                
            }
            else {
                state.favourites = [...state.favourites,product]     
                console.log(product + "add")
            }
        },
        addSearch(state,value){
            state.search = value
        }

    }
   
});