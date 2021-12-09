import ReactDOM from "react-dom";
import React from "react";
import axios from "axios";

const CostCalculator = () => {
    const [branches, setBranches] = React.useState([]);
    const [loading, setLoading] = React.useState(true);
    const [shape, setShape] = React.useState({
        height: "",
        width: "",
        length: "",
    });
    const [costParams, setCostParams] = React.useState({
        pieces: "",
        serviceType: "",
        destination: "",
        origin: "",
        densityWeight: "",
        volumetric: 0
    });
    const [response, setResponse] = React.useState(null);
    const boxSizes = [1,2,3,5,10,20,30];
    React.useEffect(() => {
        _fetchBranches().then(({data, status}) => {
            if (data.hasOwnProperty("isSuccess") && data?.isSuccess) {
                setBranches(data.branches);
                setLoading(loading => !loading);
            }
        })
    }, []);
    const _fetchBranches = async () => {
        return await axios.get("/api/getBranches", {
            headers: {
                'Accept': "application/json"
            }
        })
    }
    const _calculateDensity = () => {
        const {length, width, height} = shape;
        const density = ((Number(length)*2.54) * (Number(width)*2.54) * (Number(height)*2.54)) / 5000;
        setCostParams(prevState => {
            return {
                ...prevState,
                volumetric: density === 0 || isNaN(density) ? "" : parseFloat(density).toFixed(2)
            }
        });
    }
    const calculateDensityWeight = React.useMemo(_calculateDensity, [shape]);
    const _onSizeChange = e => {
        setShape(prevShape => {
            return {
                ...prevShape,
                [e.target.name]: e.target.value
            }
        })

    }
    const _renderLoading = () => {
        if (loading) {
            return "Loading, Please wait..."
        } else {
            return "Calculate Now!"
        }
    }
    const _onCalculate = async e => {
        e.preventDefault();
        setLoading(loading => !loading);
        try{
            const {data, status} = await axios.post('/api/calculateCost', costParams);
            setResponse(data);
            setLoading(loading => !loading);
        }catch (e){
            console.log(e.response.data);
            setLoading(loading => !loading);
        }
    }
    const _onSelectChange = e => {
        setCostParams(prevState => {
            return {
                ...prevState,
                [e.target.name]: e.target.value
            }
        })
    }
    const _onServiceType = e => {
        const finalWeight = costParams.densityWeight < costParams.volumetric ? costParams.densityWeight : costParams.volumetric;
        const output = boxSizes.reduce((prev, curr) => Math.abs(curr - finalWeight) < Math.abs(prev - finalWeight) ? curr : prev);
        setCostParams(prevState => {
            return {
                ...prevState,
                serviceType: e.target.value === 'MyBox' ? `MB${output}` : e.target.value
            }
        })
    }
    const _renderResponse = () => {
        if(response !== null){
            if(response.Status){
                return(
                    <table className={"table"}>
                        <thead>
                        <tr>
                            <th>Gross Amount</th>
                            <th>GST</th>
                            <th>Total Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{response.GrossAmount}</td>
                            <td>{response.GST}</td>
                            <td>{response.TotalAmount}</td>
                        </tr>
                        </tbody>
                    </table>
                )
            }else{
                return <span className={"text-danger"}>{response.Message}</span>
            }
        }
    }
    return (
        <div className="quotesec-main wow fadeIn animated" data-wow-delay="0.2s">
            <div className="quotesec-form wow fadeInUp animated" data-wow-delay="0.4s">
                <form action="#" onSubmit={_onCalculate}>
                    <div className="">
                        <div className="row">
                            <div className="col-md-4">
                                <div className="quotesec-feild">
                                    <input onChange={_onSizeChange} name={"length"} value={shape.length} type="text"
                                           placeholder="Length (Inches)"/>
                                </div>
                            </div>

                            <div className="col-md-4">
                                <div className="quotesec-feild">
                                    <input onChange={_onSizeChange} name={"width"} value={shape.width} type="text"
                                           placeholder="Width (Inches)"/>
                                </div>
                            </div>

                            <div className="col-md-4">
                                <div className="quotesec-feild">
                                    <input onChange={_onSizeChange} name={"height"} value={shape.height} type="text"
                                           placeholder="Height (Inches)"/>
                                </div>
                            </div>

                            <div className="col-md-6">
                                <div className="quotesec-feild">
                                    <input value={costParams.pieces} name={"pieces"} onChange={_onSelectChange}
                                           type="text" placeholder="Enter Pieces"/>
                                </div>
                            </div>

                            <div className="col-md-6">
                                <div className="quotesec-feild">
                                    <input value={costParams.densityWeight} name="densityWeight" onChange={_onSelectChange}  type="text"
                                           placeholder="Dense Weight"/>
                                </div>
                            </div>


                            <div className="col-md-6">
                                <div className="quotesec-feild">
                                    <select name={"origin"} defaultValue={""} onChange={_onSelectChange}>
                                        <option>Select Origin</option>
                                        {
                                            branches.map((branch, index) => (
                                                <option key={String(index)}
                                                        value={branch.branchCode}>{branch.name}</option>
                                            ))
                                        }
                                    </select>
                                </div>
                            </div>

                            <div className="col-md-6">
                                <div className="quotesec-feild">
                                    <select name={"destination"} defaultValue={""} onChange={_onSelectChange}>
                                        <option>Select Destination</option>
                                        {
                                            branches.map((branch, index) => (
                                                <option key={String(index)}
                                                        value={branch.branchCode}>{branch.name}</option>
                                            ))
                                        }
                                    </select>
                                </div>
                            </div>

                            <div className="col-md-12">
                                <div className="quotesec-feild">
                                    <select defaultValue={"default"} name={"serviceType"} onChange={_onServiceType}>
                                        <option disabled value={"default"}>Select Service Type</option>
                                        <option value={"overnight"}>Overnight document in envelope</option>
                                        <option value={"same day"}>Same Day</option>
                                        <option value={"second day"}>48 Hours delivery</option>
                                        <option value={"express cargo"}>72-92 Hours delivery</option>
                                        <option value={"flyer"}>Overnight Doc/Non Doc in Flyer</option>
                                        <option value={"MyBox"}>Overnight Parcel in Branded Box</option>
                                        <option value={"International"}>International</option>
                                    </select>
                                </div>
                            </div>

                            {/*<div className="col-md-6">*/}
                            {/*    <div className="quotesec-feild">*/}
                            {/*        <select defaultValue={"default"} onChange={e => e.target.value}>*/}
                            {/*            <option disabled value={"default"}>Select Shipment Type</option>*/}
                            {/*            <option>Documents, mobiles, fragile items and etc</option>*/}
                            {/*            <option>Clothes, cosmetics, toys and etc</option>*/}
                            {/*            <option>Shipments above 5kg</option>*/}
                            {/*            <option>Delivery in 48hrs</option>*/}
                            {/*            <option>Delivery in 72hrs</option>*/}
                            {/*            <option>Next day delivery</option>*/}
                            {/*        </select>*/}
                            {/*    </div>*/}
                            {/*</div>*/}
                            <div className={'col-md-12 pt-3 pb-3'}>
                                {_renderResponse()}
                            </div>
                            <div className="col-md-12">
                                <div className="quotesec-feild text-center">
                                    <button type={"reset"} className="black-btn">Clear</button>
                                    <button type={"submit"} value={"submit"}
                                            disabled={loading}>{_renderLoading()}</button>
                                    <a href="assets/images/tariff-rate.jpg" data-fancybox="tariff"  className="tariff-btn">Tariff</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    )
}
export default CostCalculator;

const costCalculatorDom = document.getElementById("cost-calculator");
if (costCalculatorDom) {
    ReactDOM.render(<CostCalculator/>, costCalculatorDom);
}
