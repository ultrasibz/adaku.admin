import t from "../../algorithms/luhn";export default function e(e){let r=e;if(/^SE[0-9]{10}01$/.test(r)){r=r.substr(2)}if(!/^[0-9]{10}01$/.test(r)){return{meta:{},valid:false}}r=r.substr(0,10);return{meta:{},valid:t(r)}}
