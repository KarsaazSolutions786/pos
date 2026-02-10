import { configureStore } from "@reduxjs/toolkit";
import customerDataReducer  from "./customerSlice/customerSlice";
import employeeReducer  from "./employeeSlice/employeeSlice";
import productReducer from "./productSlice/productSlice";
import supplierReducer from "./supplierSlice/supplierSlice";
import accountsReducer from "./accountSlice/accountSlice";
import customerGroupReducer from "./customerGroupSlice/customerGroupSlice";
import employeeGroupReducer from "./employeeGroupSlice/employeeGroupSlice";
import supplierGroupReducer from "./supplierGroupSlice/supplierGroupSlice";
import userGroupReducer from "./userGroupSlice/userGroupSlice";
import userInfoReducer from "./userInfoSlice/userInfoSlice";
import psAccountSubGroupReducer from "./psAccountSubGroupSlice/psAccountSubGroupSlice";
import bunitReducer from "./bunitSlice/bunitSlice";
import bankGroupReducer from './bankgroupSlice/bankgroupSlice'
import bankReducer from './bankSlice/bankSlice'
import closingMonthReducer from './sClosingMonth/sClosingMonth'
import gltdReducer from './GLTDSlice/GLTDSlice'
import languageReducer from './languageSlice/languageSlice'

export const store = configureStore({
  reducer: {
     customerData:customerDataReducer,
         employeeData: employeeReducer,
          productData: productReducer,
              supplierData: supplierReducer,
               accountsData: accountsReducer,
                customerGroupData: customerGroupReducer,
                employeeGroupData: employeeGroupReducer,
                supplierGroupData: supplierGroupReducer,
                    userGroupData: userGroupReducer,
                       userInfoData: userInfoReducer,
                         psAccountSubGroup: psAccountSubGroupReducer,
                         bunit: bunitReducer,
                          bankGroupData: bankGroupReducer,
                              banks: bankReducer,
                              closingMonthData: closingMonthReducer,
                              gltdData: gltdReducer,
                              language: languageReducer,
  },
});

export type RootState = ReturnType<typeof store.getState>;
export type AppDispatch = typeof store.dispatch;

export default store;
export const appDispatch: AppDispatch = store.dispatch;
