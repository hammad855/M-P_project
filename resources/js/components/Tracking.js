import React from 'react';
import ReactDOM from 'react-dom';

const domElement = document.getElementById('tracking-input');
const headerElement = document.getElementById('tracking-header');
const modalDomElement = document.getElementById('tracking-modal');
const jQuery = window.$;

const TrackingModal = ({children}) => {
    const el = React.useRef(document.createElement('div'));
    React.useEffect(() => {
        modalDomElement.appendChild(el.current);
        return () => {
            modalDomElement.removeChild(el.current)
        }
    }, []);
    return ReactDOM.createPortal(children, el.current);
}

const DataModal = ({response}) => {
    return (
        <div className="modalpopup">
            <a href="#" className="closePop">x</a>
            <div className="popinner modalform">
                <div className="container">
                    <form>
                        <div className="row">
                        <div className="col-md-12">
                            <div className="quotesec-hd mn-hd">
                                <h5>Consignment
                                    <span>#{response.CN}<b></b></span>
                                </h5>
                            </div>
                        </div>
                        <div className="col-md-6">
                            <div className="modalFeild">
                                <h6><span>Booking Date: </span> <em>{response.BookingDate}</em></h6>
                            </div>
                        </div>

                        <div className="col-md-6">
                            <div className="modalFeild">
                                <h6><span>CN: </span> <em>{response.CN}</em></h6>
                            </div>
                        </div>

                        <div className="col-md-6">
                            <div className="modalFeild">
                                <h6><span>Shipper: </span> <em>{response.Shipper}</em></h6>
                            </div>
                        </div>

                        <div className="col-md-6">
                            <div className="modalFeild">
                                <h6><span>Consignee: </span> <em>{response.Consignee}</em></h6>
                            </div>
                        </div>

                        <div className="col-md-6">
                            <div className="modalFeild">
                                <h6><span>Service Type: </span> <em>{response.ServiceType}</em></h6>
                            </div>
                        </div>

                        <div className="col-md-6">
                            <div className="modalFeild">
                                <h6><span>CN Status:</span> <em>{response.CNStatus}</em></h6>
                            </div>
                        </div>

                        <div className="col-md-6">
                            <div className="modalFeild">
                                <h6><span>Pieces: </span> <em>{response.pieces}</em></h6>
                            </div>
                        </div>

                        <div className="col-md-6">
                            <div className="modalFeild">
                                <h6><span>Weight: </span> <em>{response.weight}</em></h6>
                            </div>
                        </div>

                        <div className="col-md-12">
                            <div className="modalFeild">
                                <h6><span>Shipper Address: </span> <em>{response.ShipperAdd}</em></h6>
                            </div>
                        </div>

                        <div className="col-md-12">
                            <div className="modalFeild">
                                <h6><span>Consignee Address: </span> <em>{response.ConsigneeAdd}</em></h6>
                            </div>
                        </div>

                        <div className="col-md-6">
                            <div className="modalFeild">
                                <h6><span>COD Amount: </span> <em>{response.CodAmount}</em></h6>
                            </div>
                        </div>

                        <div className="col-md-6">
                            <div className="modalFeild">
                                <h6><span>Received By: </span> <em>{response.RecievedBy}</em></h6>
                            </div>
                        </div>
                        <div className="col-md-12">
                            <div className="modalFeild last">
                                <h5>Parcel <span> Status.</span></h5>
                            </div>
                        </div>

                        <div className="col-md-12">
                            <ul className="parcelStatus-list">
                                {response.Details.map((detail, index) => (
                                    <li key={String(index)}>
                                        <div className="">
                                        <em>
                                            <span><i className="fas fa-calendar-day"></i> {detail.DateTime}</span>
                                            <span><i className="fas fa-history"></i> {detail.Detail}</span>
                                            <span><i className="far fa-location"></i> {detail.Location}</span>
                                            <span><i className="fal fa-info"></i> {detail.Status}</span>
                                        </em>                                 
                                    </div>
                                </li>
                                ))}
                            </ul>
                        </div>
                        </div>    
                    </form>
                </div>          
            </div>
        </div>
    )
}
const MemoizedModal = React.memo(DataModal);
const Tracking = (props) => {
    const [loading, setLoading] = React.useState(false);
    const [consignmentId, setConsignmentId] = React.useState("");
    const [response, setResponse] = React.useState(null);
    React.useEffect(() => {
        // jQuery('.modalbtn').click(function() {

        // });
        jQuery('.closePop,.overlay').click(function () {
            jQuery('.modalpopup').fadeOut();
            jQuery('.overlay').fadeOut();
            jQuery('html').removeClass('pophidden');
        });
    }, []);
    const _renderLoading = () => {
        if (loading) {
            return <i className="fas fa-spinner fa-spin text-white"></i>
        } else {
            return <img src="assets/images/mb-btn.png" className="mb-btn-img" alt="img"/>
        }
    }
    const _showModal = () => {
        jQuery('.modalpopup').fadeIn();
        jQuery('.overlay').fadeIn();
        jQuery('html').addClass('pophidden');
    }
    const _fetchTrackingData = async () => {
        setLoading(loading => !loading);
        try {
            const {status, data} = await axios.get(`/api/track/${consignmentId}`);
            if (data.isSuccess === "true") {
                setResponse(data.tracking_Details);
                _showModal();
            } else {
                alert(data.message);
            }
            setLoading(loading => !loading);
        } catch (e) {
            console.log(e.response.data);
            setLoading(loading => !loading);
        }
    }
    const _setConsignment = e => setConsignmentId(e.target.value);
    return (
        <>
            <div className="mainBanner-feild">
                <input value={consignmentId} onChange={_setConsignment} type="text"
                       placeholder="Enter Tracking Number"/>
                <button onClick={_fetchTrackingData} className="modalbtn">
                    {_renderLoading()}
                </button>
            </div>
            <TrackingModal>
                {response !== null && <MemoizedModal response={response}/>}
            </TrackingModal>
        </>
    );
}

const HeaderTracking = (props) => {
    const [loading, setLoading] = React.useState(false);
    const [consignmentId, setConsignmentId] = React.useState("");
    const [response, setResponse] = React.useState(null);
    React.useEffect(() => {
        // jQuery('.modalbtn').click(function() {

        // });
        jQuery('.closePop,.overlay').click(function () {
            jQuery('.modalpopup').fadeOut();
            jQuery('.overlay').fadeOut();
            jQuery('html').removeClass('pophidden');
        });
    }, []);
    const _renderLoading = () => {
        if (loading) {
            return <i className="fas fa-spinner fa-spin text-white"></i>
        } else {
            return <img src="assets/images/mb-btn.png" className="mb-btn-img" alt="img"/>
        }
    }
    const _showModal = () => {
        jQuery('.modalpopup').fadeIn();
        jQuery('.overlay').fadeIn();
        jQuery('html').addClass('pophidden');
    }
    const _fetchTrackingData = async e => {
        e.preventDefault();
        setLoading(loading => !loading);
        try {
            const {status, data} = await axios.get(`/api/track/${consignmentId}`);
            if (data.isSuccess === "true") {
                setResponse(data.tracking_Details);
                _showModal();
            } else {
                alert(data.message);
            }
            setLoading(loading => !loading);
        } catch (e) {
            console.log(e.response.data);
            setLoading(loading => !loading);
        }
    }
    const _setConsignment = e => setConsignmentId(e.target.value);
    return (
        <>
            <form onSubmit={_fetchTrackingData}>
                <div className="th-feild">
                    <input value={consignmentId} onChange={_setConsignment} type="text" placeholder="Tracking Number"/>
                    <button type="submit">
                        {_renderLoading()}
                    </button>
                </div>
            </form>
            <TrackingModal>
                {response !== null && <MemoizedModal response={response}/>}
            </TrackingModal>
        </>
    );
}


if(domElement){
    ReactDOM.render(<Tracking/>, domElement);
}
if(headerElement){
    ReactDOM.render(<HeaderTracking/>, headerElement);
}
export default Tracking;