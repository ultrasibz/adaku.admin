import e from "../algorithms/luhn";export default function t(){return{validate(t){if(t.value===""){return{valid:true}}switch(true){case/^\d{15}$/.test(t.value):case/^\d{2}-\d{6}-\d{6}-\d{1}$/.test(t.value):case/^\d{2}\s\d{6}\s\d{6}\s\d{1}$/.test(t.value):return{valid:e(t.value.replace(/[^0-9]/g,""))};case/^\d{14}$/.test(t.value):case/^\d{16}$/.test(t.value):case/^\d{2}-\d{6}-\d{6}(|-\d{2})$/.test(t.value):case/^\d{2}\s\d{6}\s\d{6}(|\s\d{2})$/.test(t.value):return{valid:true};default:return{valid:false}}}}}
