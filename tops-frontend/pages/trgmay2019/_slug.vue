<template>
  <div class="site">
    <div class="tops-welcome">
      <div class="container">
        <div v-if="item.data.theOneCardNo" class="welcome">
          <div class="row">
            <div class="col-9">
              <div class="name">
                {{ $t('hello') }} {{ item.data.firstname }} {{ item.data.lastname }}
              </div>
              <div v-if="item.data.language == 'th'" class="the-one">
                {{ $t('number') }} <img src="/img/trgmay2019/the1-logo.png"> {{ item.data.theOneCardNo }}
              </div>
              <div v-else class="the-one">
                <img src="/img/trgmay2019/the1-logo.png"> {{ $t('number') }} {{ item.data.theOneCardNo }}
              </div>
            </div>
            <div class="col-3">
              QR CODE
            </div>
          </div>
        </div>
        <div v-else class="welcome">{{ item.data.firstname }} {{ item.data.lastname }}</div>
      </div>
    </div>
    <div class="tops-coupon">
      <div class="container">
        <h2 class="title -curve">
          <a href="#">{{ $t('recommendedCoupons') }}</a>
          <span>{{ $t('freshFoodCoupons') }}</span>
        </h2>
        <div class="promo">
          <div class="coupons">
            <carousel :items="1" :nav="false" :dots="true">
              <div v-for="couponItem in item.data.barcodes.cpn2.group1" :key="couponItem.barcode" class="coupon-item">
                <a href="#" v-on:click.prevent v-b-modal.condition-modal @click="sendDataModal(item.data.id, couponItem.barcode, 'CPN2')">
                  <img :src="'/img/trgmay2019/' + couponItem.type.toLowerCase() + '/' + couponItem.barcode + item.data.language.toUpperCase() + '.png'">
                </a>
              </div>
            </carousel>
          </div>
          <div class="condition">
            <!-- Using modifiers -->
            <a v-b-toggle.collapse-1 href="#" v-on:click.prevent>
              <img src="/img/trgmay2019/icon-condition.svg">
              <h3 class="title">{{ $t('conditions') }}</h3>
            </a>
            <!-- Element to collapse -->
            <b-collapse id="collapse-1">
              <b-card>เงื่อนไขการใช้คูปอง</b-card>
            </b-collapse>
          </div>
        </div>
      </div>
    </div>
    <div class="tops-coupon">
      <div class="container">
        <h2 class="title">
          <span>{{ $t('groceryCoupons') }}</span>
        </h2>
        <div class="promo">
          <div class="coupons">
            <carousel :items="1" :nav="false" :dots="true">
              <div v-for="couponItem in item.data.barcodes.cpn2.group2" :key="couponItem.barcode" class="coupon-item">
                <a href="#" v-on:click.prevent v-b-modal.condition-modal @click="sendDataModal(item.data.id, couponItem.barcode, 'CPN2')">
                  <img :src="'/img/trgmay2019/' + couponItem.type.toLowerCase() + '/' + couponItem.barcode + item.data.language.toUpperCase() + '.png'">
                </a>
              </div>
            </carousel>
          </div>
          <div class="condition">
            <!-- Using modifiers -->
            <a v-b-toggle.collapse-2 href="#" v-on:click.prevent>
              <img src="/img/trgmay2019/icon-condition.svg">
              <h3 class="title">{{ $t('conditions') }}</h3>
            </a>
            <!-- Element to collapse -->
            <b-collapse id="collapse-2">
              <b-card>เงื่อนไขการใช้คูปอง</b-card>
            </b-collapse>
          </div>
        </div>
      </div>
    </div>
    <div class="tops-coupon">
      <div class="container">
        <h2 class="title -curve -group3">
          <a href="#">{{ $t('cashDiscountCoupons') }}</a>
        </h2>
        <div class="promo">
          <div class="coupons">
            <carousel :items="1" :nav="false" :dots="true">
              <div v-for="couponItem in item.data.barcodes.cpn2.group3" :key="couponItem.barcode" class="coupon-item">
                <a href="#" v-on:click.prevent v-b-modal.condition-modal @click="sendDataModal(item.data.id, couponItem.barcode, 'CPN2')">
                  <img :src="'/img/trgmay2019/' + couponItem.type.toLowerCase() + '/' + couponItem.barcode + item.data.language.toUpperCase() + '.png'" class="img-group3">
                </a>
              </div>
            </carousel>
          </div>
          <div class="condition">
            <!-- Using modifiers -->
            <a v-b-toggle.collapse-3 href="#" v-on:click.prevent>
              <img src="/img/trgmay2019/icon-condition.svg">
              <h3 class="title">{{ $t('conditions') }}</h3>
            </a>
            <!-- Element to collapse -->
            <b-collapse id="collapse-3">
              <b-card>เงื่อนไขการใช้คูปอง</b-card>
            </b-collapse>
          </div>
        </div>
      </div>
    </div>
    <div class="tops-coupon">
      <div class="container">
        <h2 class="title -curve -group3">
          <a href="#">{{ $t('productDiscountCoupons') }}</a>
        </h2>
        <div class="promo">
          <div class="coupons">
            <carousel :items="1" :nav="false" :dots="true">
              <div v-for="couponItem in item.data.barcodes.cpn9.group4" :key="couponItem.barcode" class="coupon-item">
                <a href="#" v-on:click.prevent v-b-modal.condition-modal @click="sendDataModal(item.data.id, couponItem.barcode, 'CPN9')">
                  <img :src="'/img/trgmay2019/' + couponItem.type.toLowerCase() + '/' + couponItem.barcode + item.data.language.toUpperCase() + '.png'" class="img-group4">
                </a>
              </div>
            </carousel>
          </div>
          <div class="condition">
            <!-- Using modifiers -->
            <a v-b-toggle.collapse-4 href="#" v-on:click.prevent>
              <img src="/img/trgmay2019/icon-condition.svg">
              <h3 class="title">{{ $t('conditions') }}</h3>
            </a>
            <!-- Element to collapse -->
            <b-collapse id="collapse-4">
              <b-card>เงื่อนไขการใช้คูปอง</b-card>
            </b-collapse>
          </div>
        </div>
      </div>
    </div>
    <div class="tops-footer">
      <img src="/img/trgmay2019/tops-footer.png">
    </div>
    <b-modal
      id="condition-modal"
      ref="condition-modal"
      hide-header
      @ok="handleConditionOk"
      :ok-title="$t('ok')"
      :cancel-title="$t('cancel')">
      <p>{{ $t('howToUseCoupon') }}</p>
      <ul>
        <li v-for="condition in $t('conditionItem')" :key="condition.id">{{ condition.title }}</li>
      </ul>
      <p class="font-weight-bold">{{ $t('doYouWantToContinue') }}</p>
    </b-modal>
    <b-modal id="barcode-modal" ref="barcode-modal" hide-header hide-footer @hide="stopTimer">
      <div class="coupon-timer text-center">
        <div class="text-right btn-close">
          <span data-dismiss="modal">x</span>
        </div>
        <h4 class="font-weight-bold title-timer">{{ $t('timeForUseCoupon') }}</h4>
        <h2 class="text-danger display-4 mt-2 title-countdown" id="timer">
          <span id="minutes">{{ minutes }}</span>
          <span id="middle">:</span>
          <span id="seconds">{{ seconds }}</span>
        </h2>
        <h6 class="text-danger px-4 font-weight-bold mt-3 title-caution">{{ $t('cautionCoupon') }}</h6>
        <h5 class="mt-5 px-4 title-show">{{ $t('pleasePresentCoupon') }}</h5>
      </div>
      <div class="coupon-barcode text-center mt-5">
        <div class="barcode-container">
          <div id="barcode-type" class="text-right">{{ modalType }}</div>
          <div id="barcode-image" class="barcode-image"></div>
          <span id="barcode-number">{{ modalBarcode }}</span>
        </div>
      </div>
    </b-modal>
  </div>
</template>

<script>
import carousel from 'vue-owl-carousel'

export default {
  components: {
    carousel
  },
  data() {
    return {
      item: null,
      modalCustomer: null,
      modalBarcode: null,
      modalType: null,
      timer: null,
      totalTime: (10 * 60)
    }
  },
  async asyncData({ app }) {
    const responseContent = app.$axios.$get('v2/campaigns/49/customers/' + app.context.params.slug)//, { progress: false }

    const responsePromise = await Promise.all([responseContent])

    return {
      item: responsePromise[0]
    }
  },
  mounted() {
    this.$i18n.locale = this.item.data.language
  },
  methods: {
    sendDataModal(customer, barcode, type) {
      this.modalCustomer = customer
      this.modalBarcode = barcode
      this.modalType = type
    },
    handleConditionOk() {
      const responseData = this.$axios.$get('https://crm.tops.co.th/coupon_click/49/' + this.modalCustomer + '/' + this.modalBarcode)
      console.log(responseData)
      this.$refs['condition-modal'].hide()
      this.$refs['barcode-modal'].show()
      this.startTimer()
    },
    startTimer() {
      this.timer = setInterval(() => this.countdown(), 1000)
    },
    stopTimer() {
      this.totalTime = (10 * 60)
      clearInterval(this.timer)
      this.timer = null
    },
    resetTimer() {
      this.$refs['barcode-modal'].hide()
      this.totalTime = (10 * 60)
      clearInterval(this.timer)
      this.timer = null
    },
    padTime(time) {
      return (time < 10 ? '0' : '') + time
    },
    countdown() {
      if (this.totalTime >= 1) {
        this.totalTime--
      } else {
        this.totalTime = 0
        this.resetTimer()
      }
    }
  },
  computed: {
    minutes() {
      const minutes = Math.floor(this.totalTime / 60)
      return this.padTime(minutes)
    },
    seconds() {
      const seconds = this.totalTime - (this.minutes * 60)
      return this.padTime(seconds)
    }
  }
}
</script>

<style lang="scss" scoped>

.site {
  background: url('/img/trgmay2019/bg.jpg') repeat center 0;
}

.tops-welcome {
  background: rgb(193,17,49);
  background: linear-gradient(90deg, rgba(193,17,49,1) 0%, rgba(41,10,54,1) 100%);
  width: 100%;
  padding: 20px 0;
  color: #fff;
  display: inline-block;
  font-family: 'Krart', 'sans-serif';
  font-size: 1.4rem;
  @media only screen and (max-width: 600px) {
    padding: 20px 15px;
    font-size: 1.2rem;
  }
  .welcome {
    .the-one {
      margin-top: 10px;
      img {
        width: 32px;
        margin-right: 0;
      }
    }
  }
}

.tops-coupon {
  margin-top: 2rem;
  > .container {
    > .title {
      background: rgb(193,17,49);
      background: linear-gradient(90deg, rgba(193,17,49,1) 0%, rgba(41,10,54,1) 100%);
      padding-top: 5px;
      padding-bottom: 5px;
      width: 100%;
      margin-bottom: 0;
      display: inline-block;
      color: #fff;
      font-family: 'Krart', 'sans-serif';
      font-size: 24px;
      font-weight: 700;
      font-style: italic;
      &.-curve {
        padding-top: 40px;
        background: inherit;
        background-image: url('/img/trgmay2019/header-bg.png');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        &.-group3 {
          padding-bottom: 15px;
        }
      }
      a {
        display: block;
        color: #fff;
        text-align: center;
        text-decoration: none;
      }
      span {
        padding: 10px 15px 5px;
        display: block;
        color: #fff;
        font-size: 18px;
        font-weight: 400;
        font-style: normal;
      }
    }
    > .promo {
      background: rgb(193,17,49);
      background: linear-gradient(90deg, rgba(193,17,49,1) 0%, rgba(41,10,54,1) 100%);
      .coupons {
        .coupon-item {
          overflow: hidden;
          img {
            width: calc(100% + 42px);
            max-width: inherit;
            margin: -25px -21px 0;
            @media only screen and (max-width: 600px) {
              width: calc(100% + 22px);
              margin: -13px -10px 0;
            }
          }
          .img-group3 {
            width: calc(100% + 70px);
            margin: -25px -36px 0;
            @media only screen and (max-width: 600px) {
              width: calc(100% + 43px);
              margin: -15px -22px 0;
            }
          }
          .img-group4 {
            @media only screen and (max-width: 600px) {
              width: calc(100% + 25px);
              margin: -13px -13px 0;
            }
          }
        }
      }
    }
  }
}

.condition {
  > a {
    padding-left: 20px;
    padding-bottom: 10px;
    display: block;
    text-decoration: none;
    img {
      display: inline-block;
      background-color: #333;
      margin-right: 8px;
      width: 30px;
      height: 30px;
      padding: 9px 8px 9px 11px;
      border-radius: 50%;
      vertical-align: top;
      transition: .3s all;
    }
    h3 {
      display: inline-block;
      margin-bottom: 0;
      font-family: 'Krart', 'sans-serif';
      font-weight: 700;
      font-size: 16px;
      line-height: 32px;
      vertical-align: top;
      color: #fff;
    }
  }
  .card-body {
    font-family: 'Krart', 'sans-serif';
  }
}

.tops-footer {
  padding: 15px 0;
  background: rgb(193,17,49);
  background: linear-gradient(90deg, rgba(193,17,49,1) 0%, rgba(41,10,54,1) 100%);
  margin-top: 30px;
  text-align: center;
  img {
    margin: 0;
    max-height: 40px;
    color: #fff;
  }
}

</style>
