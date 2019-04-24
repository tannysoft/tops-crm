const pkg = require('./package')

module.exports = {
  mode: 'spa',
  /*
  ** Headers of the page
  */
  head: {
    title: pkg.name,
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: pkg.description }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },

  /*
  ** Customize the progress-bar color
  */
  loading: { color: '#fff' },

  /*
  ** Global CSS
  */
  css: [
  ],

  /*
  ** Plugins to load before mounting the App
  */
  plugins: [
  ],

  /*
  ** Nuxt.js modules
  */
  modules: [
    // Doc: https://axios.nuxtjs.org/usage
    '@nuxtjs/axios',
    // Doc: https://bootstrap-vue.js.org/docs/
    'bootstrap-vue/nuxt',
    ['nuxt-i18n', {
      locales: [
        {
          name: 'Thai',
          code: 'th',
          iso: 'th-TH'
        },
        {
          name: 'English',
          code: 'en',
          iso: 'en-US'
        }
      ],
      defaultLocale: 'th',
      vueI18n: {
        fallbackLocale: 'th',
        messages: {
          en: {
            hello: 'Hello!',
            number: 'No.',
            recommendedCoupons: 'Recommended Coupons For You',
            freshFoodCoupons: 'Fresh Food Coupons',
            groceryCoupons: 'Grocery Coupons',
            cashDiscountCoupons: 'Cash Discount Coupons',
            productDiscountCoupons: 'Product Discount Coupons',
            conditions: 'Conditions',
            howToUseCoupon: 'To use this Coupon',
            doYouWantToContinue: 'Do you want to continue?',
            conditionItem: [
              { id: 0, title: 'Coupon is invalid after the time has run' },
              { id: 1, title: 'Tap use and present barcode to the cashier within 10 minutes.' },
              { id: 2, title: 'Closing the coupon page will invalidate the coupon.' }
            ],
            ok: 'OK',
            cancel: 'Cancel',
            timeForUseCoupon: 'Time for use coupon',
            cautionCoupon: 'Once closed, you may not return to this page and the coupon will be invalid.',
            pleasePresentCoupon: 'Please present this barcode to cashier.'
          },
          th: {
            hello: 'สวัสดี',
            number: 'หมายเลข',
            recommendedCoupons: 'คูปองส่วนลดเฉพาะคุณ',
            freshFoodCoupons: 'คูปองส่วนลดอาหารสด',
            groceryCoupons: 'คูปองสินค้าอุปโภค บริโภค',
            cashDiscountCoupons: 'คูปองส่วนลดเงินสด',
            productDiscountCoupons: 'คูปองส่วนลดสินค้า',
            conditions: 'เงื่อนไขการใช้คูปอง',
            howToUseCoupon: 'การใช้คูปองที่หน้าร้าน / สาขา',
            doYouWantToContinue: 'ท่านต้องการดำเนินการต่อหรือไม่?',
            conditionItem: [
              { id: 0, title: 'คูปองไม่สามารถนำกลับมาใช้ต่อได้ เมื่อเวลาที่แสดงหมดลง' },
              { id: 1, title: 'เมื่อท่านกดใช้ต้องแสดงบาร์โค้ดต่อแคชเชียร์ภายในเวลา 10 นาที' },
              { id: 2, title: 'หากปิดหน้าแสดงคูปองท่านจะไม่สามารถกลับมาใช้คูปองได้' }
            ],
            ok: 'ตกลง',
            cancel: 'ยกเลิก',
            timeForUseCoupon: 'ระยะเวลาการใช้งาน',
            cautionCoupon: 'หากท่านปิดหน้านี้คูปองจะไม่สามารถใช้ได้อีก',
            pleasePresentCoupon: 'กรุณาแสดงเลขบาร์โค้ดต่อแคชเชียร์'
          }
        }
      }
    }]
  ],
  /*
  ** Axios module configuration
  */
  axios: {
    // See https://github.com/nuxt-community/axios-module#options
    // baseURL: 'http://localhost:8000/api/'
    baseURL: 'https://crm.tops.co.th/api/public/api/'
  },

  /*
  ** Build configuration
  */
  build: {
    /*
    ** You can extend webpack config here
    */
    // publicPath: 'https://crm.tops.co.th/_nuxt',
    extend(config, ctx) {
      // Run ESLint on save
      if (ctx.isDev && ctx.isClient) {
        config.module.rules.push({
          enforce: 'pre',
          test: /\.(js|vue)$/,
          loader: 'eslint-loader',
          exclude: /(node_modules)/
        })
      }
    }
  }
}
