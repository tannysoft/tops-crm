<template>
  <div>
    <nuxt />
  </div>
</template>

<style lang="scss">

@font-face {
    font-family:"Krart";
    src:url("/fonts/krart/krart-black.woff2") format("woff2"),url("/fonts/krart/krart-black.woff") format("woff"),url("/fonts/krart/krart-black.otf") format("opentype");
    font-style:normal;font-weight:700;
}

@font-face {
    font-family:"Krart";
    src:url("/fonts/krart/krart-black-italic.woff2") format("woff2"),url("/fonts/krart/krart-black-italic.woff") format("woff"),url("/fonts/krart/krart-black-italic.otf") format("opentype");
    font-style:italic;font-weight:700;
}

@font-face {
    font-family:"Krart";
    src:url("/fonts/krart/krart-medium.woff2") format("woff2"),url("/fonts/krart/krart-medium.woff") format("woff"),url("/fonts/krart/krart-medium.otf") format("opentype");
    font-style:normal;font-weight:500;
}

@font-face {
    font-family:"Krart";
    src:url("/fonts/krart/krart-medium-italic.woff2") format("woff2"),url("/fonts/krart/krart-medium-italic.woff") format("woff"),url("/fonts/krart/krart-medium-italic.otf") format("opentype");
    font-style:italic;font-weight:400;
}

@font-face {
    font-family:"Krart";
    src:url("/fonts/krart/krart-bold.woff2") format("woff2"),url("/fonts/krart/krart-bold.woff") format("woff"),url("/fonts/krart/krart-bold.otf") format("opentype");
    font-style:normal;font-weight:400;
}

@font-face {
    font-family:"Krart";
    src:url("/fonts/krart/krart-book.woff2") format("woff2"),url("/fonts/krart/krart-book.woff") format("woff"),url("/fonts/krart/krart-book.otf") format("opentype");
    font-style:normal;font-weight:300;
}

html {
  font-family: 'Source Sans Pro', -apple-system, BlinkMacSystemFont, 'Segoe UI',
    Roboto, 'Helvetica Neue', Arial, sans-serif;
  font-size: 16px;
  word-spacing: 1px;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: border-box;
  margin: 0;
}

.button--green {
  display: inline-block;
  border-radius: 4px;
  border: 1px solid #3b8070;
  color: #3b8070;
  text-decoration: none;
  padding: 10px 30px;
}

.button--green:hover {
  color: #fff;
  background-color: #3b8070;
}

.button--grey {
  display: inline-block;
  border-radius: 4px;
  border: 1px solid #35495e;
  color: #35495e;
  text-decoration: none;
  padding: 10px 30px;
  margin-left: 15px;
}

.button--grey:hover {
  color: #fff;
  background-color: #35495e;
}

img {
  max-width: 100%;
  height: auto;
}

button:focus {
  outline: none;
}

.container {
  max-width: 600px;
  padding: 0;
}

.card {
  border: 0;
  border-radius: 0;
}

.owl-theme .owl-nav.disabled + .owl-dots {
  margin-top: 0!important;
}

.owl-theme .owl-dots .owl-dot span {
  margin: 5px 3px!important;
  background-color: #fff!important;
}

.owl-theme .owl-dots .owl-dot.active span {
  width: 30px;
  background-color: #fff!important;
}

.owl-theme {
    .owl-nav {
        position: absolute;
        top: calc(50% - 50px);
        left: 0;
        right: 0;
        margin-top: 0!important;

        .owl-prev, .owl-next {
            position: absolute;
            height: 50px;
            color: inherit;
            background: none;
            border: none;
            z-index: 100;

            i {
                font-size: 2.5rem;
                color: #cecece;
            }
        }

        .owl-prev {
            left: 0;
        }

        .owl-next {
            right: 0;
        }
    }
}

#condition-modal {
  .modal-dialog {
    transform: translate(0, -50%);
    top: 50%;
    margin: 0 auto;
    padding: 15px;
  }
  .modal-content {
    color: #000;
    border-radius: 1.2rem;
    box-shadow: 2px 1px 2px 0 rgba(0, 0, 0, 0.5);
    font-family: 'Krart', 'sans-serif';
    .modal-body {
      ul {
        padding: 0 0 0 15px;
      }
    }
  }
  .modal-footer {
    padding: 0;
    text-align: center;
    font-family: 'Krart', 'sans-serif';
    .btn {
      padding: 1rem;
      font-size: 1.5rem;
      width: 100%;
      border: 0;
      background: transparent;
      color: #333;
      font-weight: 700;
      &.btn-secondary {
        border-right: 1px solid rgba(0, 0, 0, 0.1);
        border-bottom-left-radius: 1.2rem;
      }
      &.btn-primary {
        margin-left: -.25rem;
        border-bottom-right-radius: 1.2rem;
      }
    }
  }
}

#barcode-modal {
  .modal-dialog {
    transform: translate(0, -50%);
    top: 50%;
    margin: 0 auto;
    margin: .5rem;
    color: #1f1f1f;
    max-width: 340px;
    margin: 0 auto;
  }
  .modal-content {
    background-color: transparent;
    font-family: 'Krart', 'sans-serif';
  }
  .modal-body {
    position: relative;
    padding: 0;
    background-image: url('/img/trgmay2019/coupon-background.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }
  .btn-close {
    span {
      color: #8c8c8c;
      font-size: 2rem;
      padding: 0 25px 0 0;
    }
  }
  .barcode-container {
    padding: 2.3rem 2.5rem 1rem 2.5rem;
    .barcode-image {
      padding-top: 0;
      padding-bottom: 0;
      text-align: center;
    }
  }
}

#qrcode-modal {
  .modal-dialog {
    transform: translate(0, -50%);
    top: 50%;
    margin: 0 auto;
    margin: .5rem;
    color: #1f1f1f;
    max-width: 300px;
    margin: 0 auto;
    img {
      width: 100%;
    }
  }
}

</style>
