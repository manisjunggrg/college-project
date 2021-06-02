import React, {useState} from 'react';
import axios from "axios";
const ProfileEditForm = () =>{

    const [phone , setPhone] = useState('')
    // const [email,setEmail] =useState('')

    const handleSubmit=(e)=>{
        e.preventDefault();

       const formData = {
           phone: phone,
           // email: email,
       }

       axios.post('http://e-government.bro/api/profile', formData , {headers : {'token': 'bB3AfAqQv5tYtaCkkgIuQBuS9pQYN3OycpEEuOhJ'}})
           .then( res => {
               console.log(res);
               console.log(res.data);
           })
           .catch((err)=> console.log(err.response));
    }
    const handleChangeName=(e)=>{
    setPhone(e.target.value)
    }

    return(
        <div className="container-fluid">
                                 <form onSubmit={handleSubmit}>
                                     <div className="row">
                                         <div className="col-6">
                                             <input type="phone" className="form-control" name="phone" placeholder="Enter Full Name" onChange={handleChangeName}/>
                                        </div>
                                         {/*<div className="col-6">*/}
                                         {/*    <input type="email" className="form-control" name="name" placeholder="Enter Email" onChange={handleChangeEmail}/>*/}
                                         {/*</div>*/}
                                     </div>
                                     <br/>
                                     <input type="submit" value="Submit" className="btn btn-primary"/>
                                  </form>
                         </div>
    )
}
export default ProfileEditForm
//
// export default class ProfileEditForm extends Component {
//     constructor(props) {
//         super(props);
//
//         this.state = {
//             name:'',
//             email: '',
//
//         }
//     };
//
//      handleChangeName()  {
//         this.setState({ name : target.value });
//     }
//
//     handleChangeEmail() {
//         this.setState({ email : target.value });
//     }
//
//    handleSubmit() {
//        preventDefault();
//
//        const formData = {
//            name: this.state.name,
//            email: this.state.email,
//        }
//
//        axios.post('http://e-government.bro/api/profile_submit', formData )
//            .then( res => {
//                console.log(res);
//                console.log(res.data);
//            })
//            .catch((err)=> console.log(err));
//    }
//
//     render() {
//         return (
//             <div className="container-fluid">
//                     <form onSubmit={this.handleSubmit}>
//                         <div className="row">
//                             <div className="col-6">
//                                 <input type="text" className="form-control" name="name" placeholder="Enter Full Name" onChange={this.handleChangeName}/>
//                             </div>
//                             <div className="col-6">
//                                 <input type="email" className="form-control" name="name" placeholder="Enter Email" onChange={this.handleChangeEmail}/>
//                             </div>
//                         </div>
//                         <br/>
//                         <input type="submit" value="Submit" className="btn btn-primary"/>
//                      </form>
//             </div>
//         );
//     }
// }
