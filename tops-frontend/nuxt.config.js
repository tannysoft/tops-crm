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
      parsePages: false,
      pages: {
        en: false
      },
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
            khun: 'Khun',
            number: 'No.',
            tapQrCode: 'Tap & Let the cashier scan QR Code for your The1 Number',
            recommendedCoupons: 'Recommended Coupons For You',
            freshFoodCoupons: 'Fresh Food coupon',
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
            pleasePresentCoupon: 'Please present this barcode to cashier.',
            couponConditions: 'Coupon Conditions',
            categoryCouponConditions: 'Category coupon conditions',
            cpn2Group1ConditionsItem: [
              { id: 0, title: 'This coupon is for a purchase the required products.' },
              { id: 1, title: 'This discount coupon can be used with other coupons had the purchase price in the receipt is greater than or equal to the purchase price of all coupons combined.' },
              { id: 2, title: 'This coupon can be used to get discount at all branches of <strong>Central Food Hall and Tops.</strong>' },
              { id: 3, title: 'This coupon can be used once/receipt with the 1 members.' },
              { id: 4, title: 'This coupon is not valid with special priced items.' },
              { id: 5, title: 'This coupon cannot be exchanged or redeemed for cash.' },
              { id: 6, title: 'Central Food Retail Co., Ltd. reserves the right to reject the capture screen or duplicated version of discount coupon.' },
              { id: 7, title: 'Central Food Retail Co., Ltd. reserves the right to changes terms and conditions without prior notice.' }
            ],
            cpn2Group2ConditionsItem: [
              { id: 0, title: 'This coupon is for a purchase the required products.' },
              { id: 1, title: 'This discount coupon can be used with other coupons had the purchase price in the receipt is greater than or equal to the purchase price of all coupons combined.' },
              { id: 2, title: 'This coupon can be used to get discount at all branches of <strong>Central Food Hall and Tops.</strong>' },
              { id: 3, title: 'This coupon can be used once/receipt with the 1 members.' },
              { id: 4, title: 'This coupon is not valid with special priced items.' },
              { id: 5, title: 'This coupon cannot be exchanged or redeemed for cash.' },
              { id: 6, title: 'Central Food Retail Co., Ltd. reserves the right to reject the capture screen or duplicated version of discount coupon.' },
              { id: 7, title: 'Central Food Retail Co., Ltd. reserves the right to changes terms and conditions without prior notice.' }
            ],
            cpn2Group3ConditionsItem: [
              { id: 0, title: 'The purchase price must be net price after deducting discounts' },
              { id: 1, title: 'Excluding the following items: wholesale (7 or more items bearing the same barcode/receipt), bulk pack of M-150\'s products and Birdy\'s products, electronics, all gift baskets, alcoholic beverages, tobacco, infant formula and follow-up formula of baby milk powder, baby dietary supplement, cooking oil, cooking sugar, bill payment, internet card, international phone card, prepaid card, gift voucher, drug store, bookstore, rental shop, food court, Tops FLAVOUR, dining area at Central Food Hall and Segafredo Zanetti Espresso.' },
              { id: 2, title: 'This discount coupon can be used with other coupons had the purchase price in the receipt is greater than or equal to the purchase price of all coupons combined.' },
              { id: 3, title: 'This coupon can be used once/receipt with The 1 members at Central Food Hall and Tops.' },
              { id: 4, title: 'This coupon cannot be exchanged or redeemed for cash.' },
              { id: 5, title: 'Central Food Retail Co., Ltd. reserves the right to reject the capture screen or duplicated version of this coupon.' },
              { id: 6, title: 'Central Food Retail Co., Ltd. reserves the right to changes terms and conditions without prior notice.' },
              { id: 7, title: 'Central Food Retail Co., Ltd. reserves the right to approve the validity of a coupon.' }
            ],
            cpn9ConditionsItem: [
              { id: 0, title: 'This coupon can be used to get discount at branches of Central Food Hall and Tops hat have this item available.' },
              { id: 1, title: 'Net price of this item must be of greater value than a discount stated on the coupon.' },
              { id: 2, title: 'The coupon can be used with The1 to get discount on the product at an exact amount stated on the coupon' },
              { id: 3, title: 'Limit to 1 coupon / receipt' },
              { id: 4, title: 'This coupon cannot be exchanged or redeemed for cash' },
              { id: 5, title: 'Central Food Retail Co., Ltd. reserves the right to reject the capture screen or duplicated version of this coupon.' },
              { id: 6, title: 'Central Food Retail Co., Ltd. reserves the right to changes terms and conditions without prior notice.' }
            ]
          },
          th: {
            hello: 'สวัสดี',
            khun: 'คุณ',
            number: 'หมายเลข',
            tapQrCode: 'แตะให้แคชเชียร์สแกน QR Code หมายเลขสมาชิกของคุณ',
            recommendedCoupons: 'คูปองส่วนลดเฉพาะคุณ',
            freshFoodCoupons: 'คูปองอาหารสด',
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
            pleasePresentCoupon: 'กรุณาแสดงเลขบาร์โค้ดต่อแคชเชียร์',
            couponConditions: 'เงื่อนไขการใช้คูปอง',
            categoryCouponConditions: 'เงื่อนไขการใช้คูปองส่วนลดกลุ่มสินค้า',
            cpn2Group1ConditionsItem: [
              { id: 0, title: 'คูปองส่วนลดนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าตามที่กำหนด' },
              { id: 1, title: 'คูปองส่วนลดนี้สามารถใช้ร่วมกับคูปองส่วนลดอื่นได้ หากยอดซื้อของใบเสร็จนั้น มากกว่าหรือเท่ากับยอดซื้อตามเงื่อนไขของแต่ละคูปองรวมกัน' },
              { id: 2, title: 'คูปองนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าที่<strong>เซ็นทรัล ฟู้ด ฮอลล์และท็อปส์ทุกสาขา</strong>' },
              { id: 3, title: 'คูปองนี้ใช้เป็นส่วนลดสำหรับสมาชิกเดอะวัน' },
              { id: 4, title: 'คูปองนี้ไม่สามารถลดเพิ่มจากสินค้าที่ลดราคาอยู่แล้ว' },
              { id: 5, title: 'คูปองนี้ไม่สามารถแลกแลกเปลี่ยนหรือทอนเป็นเงินสดได้' },
              { id: 6, title: 'ขอสงวนสิทธิ์การใช้คูปองที่บันทึกผ่านการจับภาพหน้าจอทุกกรณี' },
              { id: 7, title: 'บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า' }
            ],
            cpn2Group2ConditionsItem: [
              { id: 0, title: 'คูปองส่วนลดนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าตามที่กำหนด' },
              { id: 1, title: 'คูปองส่วนลดนี้สามารถใช้ร่วมกับคูปองส่วนลดอื่นได้ หากยอดซื้อของใบเสร็จนั้น มากกว่าหรือเท่ากับยอดซื้อตามเงื่อนไขของแต่ละคูปองรวมกัน' },
              { id: 2, title: 'คูปองนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าที่<strong>เซ็นทรัล ฟู้ด ฮอลล์และท็อปส์ทุกสาขา</strong>' },
              { id: 3, title: 'คูปองนี้ใช้เป็นส่วนลดสำหรับสมาชิกเดอะวัน' },
              { id: 4, title: 'คูปองนี้ไม่สามารถลดเพิ่มจากสินค้าที่ลดราคาอยู่แล้ว' },
              { id: 5, title: 'คูปองนี้ไม่สามารถแลกแลกเปลี่ยนหรือทอนเป็นเงินสดได้' },
              { id: 6, title: 'ขอสงวนสิทธิ์การใช้คูปองที่บันทึกผ่านการจับภาพหน้าจอทุกกรณี' },
              { id: 7, title: 'บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า' }
            ],
            cpn2Group3ConditionsItem: [
              { id: 0, title: 'ยอดซื้อตามที่กำหนด คำนวณจากมูลค่าหลังหักส่วนลดทุกชนิดแล้ว' },
              { id: 1, title: 'ยกเว้นสินค้าซื้อเหมา (การซื้อสินค้าที่มีบาร์โค้ดเดียวกันตั้งแต่ 7 ชิ้นขึ้นไป/ใบเสร็จ),สินค้ายกแพ็คยี่ห้อ เอ็ม 150 และ ยี่ห้อเบอร์ดี้, สินค้าแผนกเครื่องใช้ไฟฟ้า, กระเช้าของขวัญทุกชนิด, เครื่องดื่มผสมแอลกอฮอล์, บุหรี่, นมผงเด็กสูตรทารกและสูตรต่อเนื่อง, อาหารเสริมสำหรับเด็ก, น้ำมันประกอบอาหาร, น้ำตาลประกอบอาหาร, บริการชำระบิล, บัตรเติมเงิน, บัตรอินเทอร์เน็ต, บัตรโทรศัพท์ระหว่างประเทศ, บัตรของขวัญ, ร้านขายยา, ร้านหนังสือ, ร้านค้าเช่า, ฟู้ดคอร์ท, Tops FLAVOUR, dining area at Central Food Hall และร้านเซกาเฟรโด ซาเนตติ เอสเพรสโซ' },
              { id: 2, title: 'คูปองส่วนลดนี้สามารถใช้ร่วมกับคูปองส่วนลดอื่นได้ หากยอดซื้อของใบเสร็จนั้น มากกว่าหรือเท่ากับยอดซื้อตามเงื่อนไขของแต่ละคูปองรวมกัน' },
              { id: 3, title: 'คูปองนี้ใช้เป็นส่วนลดสำหรับสมาชิกเดอะวัน และใช้ได้เพียง 1 ครั้ง /ใบเสร็จ ที่เซ็นทรัล ฟู้ด ฮอลล์ และท็อปส์ทุกสาขา' },
              { id: 4, title: 'คูปองนี้ไม่สามารถแลกเปลี่ยนหรือทอนเป็นเงินสดได้' },
              { id: 5, title: 'ขอสงวนสิทธิ์การใช้คูปองที่บันทึกผ่านการจับภาพหน้าจอทุกกรณี' },
              { id: 6, title: 'บริษัทเซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงือนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า' },
              { id: 7, title: 'การอนุมัติการใช้คูปองนี้ขึ้นอยู่กับดุลยพินิจของบริษัทเซ็นทรัล ฟู้ด รีเทล จำกัด' }
            ],
            cpn9ConditionsItem: [
              { id: 0, title: 'คูปองนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าที่เซ็นทรัล ฟู้ด ฮอลล์และท็อปส์ เฉพาะสาขาที่มีสินค้าจำหน่ายเท่านั้น' },
              { id: 1, title: 'ราคาสุทธิของสินค้าต้องมากกว่ามูลค่าส่วนลดที่ระบุบนคูปอง' },
              { id: 2, title: 'คูปองนี้ใช้เป็นส่วนลดสินค้าตามจำนวนที่ระบุบนคูปองสำหรับสมาชิกเดอะวัน' },
              { id: 3, title: 'คูปองนี้ใช้ได้เพียง 1 ใบ / ใบเสร็จเท่านั้น' },
              { id: 4, title: 'คูปองนี้ไม่สามารถแลกเปลี่ยนหรือทอนเป็นเงินสดได้' },
              { id: 5, title: 'ขอสงวนสิทธิ์การใช้คูปองที่บันทึกผ่านการจับภาพหน้าจอทุกกรณี' },
              { id: 6, title: 'บริษัทเซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงือนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า' }
            ]
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
