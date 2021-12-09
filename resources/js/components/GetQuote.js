import React from "react";
import ReactDOM from "react-dom";
import axios from 'axios';

const GetQuote = props => {
    const [formData, setFormData] = React.useState({});
    const _onFormSubmit = async e => {
        e.preventDefault();
        try{
            const {status, data} = await axios.post('api/addQuote', formData);
            if(data.hasOwnProperty('success')){
                alert(data.msg);
            }else if(data.hasOwnProperty('error')){
                alert(data.msg);
            }
        }catch(e){
            console.log(e);
        }
    }
    const _onInputValue = e => {
        setFormData(prevState => {
            return{
                ...prevState,
                [e.target.name]: e.target.value,
            }
        })
    }
    return(
        <section className="quoteSection">
            <div className="container">
               <div className="quotesec-hd mn-hd wow fadeInDown animated" data-wow-delay="0.4s">
                  <h5> Get A
                     <span>Quote Now<b>!</b></span>
                  </h5>
               </div>

               <div className="quotesec-main wow fadeIn animated" data-wow-delay="0.2s">
                  <div className="quotesec-form wow fadeInUp animated" data-wow-delay="0.4s">
                     <form onSubmit={_onFormSubmit}>
                        <div className="">
                           <div className="row">
                              <div className="col-md-6">
                                 <div className="quotesec-feild">
                                    <div className="row align-items-center">
                                       <div className="col-md-4">
                                          <label>Name <em>:</em></label>
                                       </div>

                                       <div className="col-md-8">
                                          <input type="text" onChange={_onInputValue} name="name" placeholder="Type Your Name" required/>
                                       </div>
                                    </div>

                                 </div>
                              </div>

                              <div className="col-md-6">
                                 <div className="quotesec-feild">
                                    <div className="row align-items-center">
                                       <div className="col-md-4">
                                          <label>Company <em>:</em></label>
                                       </div>

                                       <div className="col-md-8">
                                          <input type="text" onChange={_onInputValue} name="company" placeholder="Type Your Company's Name" required/>
                                       </div>
                                    </div>

                                 </div>
                              </div>

                              <div className="col-md-6">
                                 <div className="quotesec-feild">
                                    <div className="row align-items-center">
                                       <div className="col-md-4">
                                          <label>NTN# <em>:</em></label>
                                       </div>

                                       <div className="col-md-8">
                                          <input type="number" onChange={_onInputValue} name="ntn" placeholder="Type Your NTN" required/>
                                       </div>
                                    </div>

                                 </div>
                              </div>

                              <div className="col-md-6">
                                 <div className="quotesec-feild">
                                    <div className="row align-items-center">
                                       <div className="col-md-4">
                                          <label>City <em>:</em></label>
                                       </div>

                                       <div className="col-md-8">
                                          <input type="text" onChange={_onInputValue} name="city" placeholder="Type Your City's Name" required/>
                                       </div>
                                    </div>

                                 </div>
                              </div>

                              <div className="col-md-6">
                                 <div className="quotesec-feild">
                                    <div className="row align-items-center">
                                       <div className="col-md-4">
                                          <label>CNIC# <em>:</em></label>
                                       </div>

                                       <div className="col-md-8">
                                          <input type="number" onChange={_onInputValue} name="cnic" placeholder="Type Your CNIC" required/>
                                       </div>
                                    </div>

                                 </div>
                              </div>

                              <div className="col-md-6">
                                 <div className="quotesec-feild">
                                    <div className="row align-items-center">
                                       <div className="col-md-4">
                                          <label>Address <em>:</em></label>
                                       </div>

                                       <div className="col-md-8">
                                          <textarea onChange={_onInputValue} name="address" placeholder="Type Your Address"></textarea>
                                       </div>
                                    </div>

                                 </div>
                              </div>

                              <div className="col-md-6">
                                 <div className="quotesec-feild">
                                    <div className="row align-items-center">
                                       <div className="col-md-4">
                                          <label>Mobile <em>:</em></label>
                                       </div>

                                       <div className="col-md-8">
                                          <input onChange={_onInputValue} name="mobile" type="tel" placeholder="Type Your Mobile" required/>
                                       </div>
                                    </div>

                                 </div>
                              </div>

                              <div className="col-md-6">
                                 <div className="quotesec-feild">
                                    <div className="row align-items-center">
                                       <div className="col-md-4">
                                          <label>Email <em>:</em></label>
                                       </div>

                                       <div className="col-md-8">
                                          <input onChange={_onInputValue} name="email" type="email" placeholder="Type Your Email" required/>
                                       </div>
                                    </div>

                                 </div>
                              </div>

                              <div className="col-md-6">
                                 <div className="quotesec-feild">
                                    <div className="row align-items-center">
                                       <div className="col-md-4">
                                          <label>Account <em>:</em></label>
                                       </div>

                                       <div className="col-md-8">
                                          <select name="account_type" onChange={_onInputValue} defaultValue="">
                                             <option disabled value="">Select Your Account Type</option>
                                             <option value="cod">Cash On Delivery (COD)</option>
                                             <option value="corporate">Corporate</option>
                                            {/* <option>Retail COD</option>  */}
                                          </select>
                                       </div>
                                    </div>

                                 </div>
                              </div>

                              <div className="col-md-6">
                                 <div className="quotesec-feild">
                                    <div className="row align-items-center">
                                       <div className="col-md-4">
                                          <label>Business <em>:</em></label>
                                       </div>

                                       <div className="col-md-8">
                                          <input onChange={_onInputValue} name="business" type="text" placeholder="Type Your Business" required/>
                                       </div>
                                    </div>

                                 </div>
                              </div>

                              <div className="col-md-12">
                                 <div className="quotesec-feild">
                                    <div className="row align-items-center">
                                       <div className="col-md-4">
                                          <label>Number Of Shipment Per Month <em>:</em></label>
                                       </div>

                                       <div className="col-md-8">
                                          <input onChange={_onInputValue} name="shipments_per_month" type="text" placeholder="Type Number Of Shipment" required/>
                                       </div>
                                    </div>

                                 </div>
                              </div>

                              <div className="col-md-12">
                                 <div className="quotesec-feild">
                                    <div className="row align-items-center">
                                       <div className="col-md-2">
                                          <label>Details <em>:</em></label>
                                       </div>

                                       <div className="col-md-10">
                                          <textarea onChange={_onInputValue} name="details" placeholder="Any Further Details"></textarea>
                                       </div>
                                    </div>

                                 </div>
                              </div>

                              <div className="col-md-12">
                                 <div className="quotesec-feild text-center">
                                    <button className="quotesec-feild-btn">Get A Quote Now!</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </section>

    );
}

const getQuoteElement = document.getElementById("get-quote");
if (getQuoteElement) {
    ReactDOM.render(<GetQuote/>, getQuoteElement);
}
