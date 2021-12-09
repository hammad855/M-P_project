import React from "react";
import ReactDOM from "react-dom";

const PickupForm = props => {
    const [formData, setFormData] = React.useState({});
    const _onFormSubmit = async e => {
        e.preventDefault();
        try{
            const {status, data} = await axios.post('api/pickupRequest', formData);
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
                                                <input onChange={_onInputValue} name="name" type="text" placeholder="Type Your Name" required/>
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
                                                <input onChange={_onInputValue} name="address" type="text" placeholder="Your Address" required/>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div className="col-md-6">
                                    <div className="quotesec-feild">
                                        <div className="row align-items-center">
                                            <div className="col-md-4">
                                                <label>Email Address <em>:</em></label>
                                            </div>

                                            <div className="col-md-8">
                                                <input onChange={_onInputValue} name="email" type="email" placeholder="Type Your Email Address" required/>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div className="col-md-6">
                                    <div className="quotesec-feild">
                                        <div className="row align-items-center">
                                            <div className="col-md-4">
                                                <label>Phone# <em>:</em></label>
                                            </div>

                                            <div className="col-md-8">
                                                <input onChange={_onInputValue} name="phone" type="tel" placeholder="Type Your Phone nuber" required/>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div className="col-md-12">
                                    <div className="quotesec-feild">
                                        <div className="row align-items-center">
                                            <div className="col-md-2">
                                                <label>Origin City <em>:</em></label>
                                            </div>

                                            <div className="col-md-10">
                                                <textarea onChange={_onInputValue} name="city" placeholder="Type Origin City" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-md-12">
                                    <div className="quotesec-feild">
                                        <div className="row align-items-center">
                                            <div className="col-md-2">
                                                <label>Destination City <em>:</em></label>
                                            </div>

                                            <div className="col-md-10">
                                                <textarea onChange={_onInputValue} name="destination_city" placeholder="Type Destination City" required></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div className="col-md-12">
                                    <div className="quotesec-feild">
                                        <div className="row align-items-center">
                                            <div className="col-md-2">
                                                <label>Message <em>:</em></label>
                                            </div>

                                            <div className="col-md-10">
                                                <textarea onChange={_onInputValue} name="message" placeholder="Type Your Message" required></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div className="col-md-12">
                                    <div className="quotesec-feild text-center">
                                        <button className="quotesec-feild-btn">Pickup Now!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    )
}

const pickUpFormElement = document.getElementById('pickup-form');
if(pickUpFormElement){
    ReactDOM.render(<PickupForm/>, pickUpFormElement);
}